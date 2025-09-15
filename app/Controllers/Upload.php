<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Upload extends Controller
{
    public function upload_chunk()
    {
        helper('filesystem');

        $tempDir  = WRITEPATH . 'uploads/temp/';
        $finalDir = WRITEPATH . 'uploads/final/';

        // Buat folder jika belum ada, atau kembalikan error
        if (!is_dir($tempDir) && !mkdir($tempDir, 0777, true)) {
            log_message('error', 'Gagal membuat folder temp: ' . $tempDir);
            return $this->response->setStatusCode(500)->setBody('Gagal membuat folder temp');
        }

        if (!is_dir($finalDir) && !mkdir($finalDir, 0777, true)) {
            log_message('error', 'Gagal membuat folder final: ' . $finalDir);
            return $this->response->setStatusCode(500)->setBody('Gagal membuat folder final');
        }

        // Ambil data POST
        $resumableIdentifier   = $this->request->getPost('resumableIdentifier');
        $resumableFilename     = $this->request->getPost('resumableFilename');
        $resumableChunkNumber  = $this->request->getPost('resumableChunkNumber');
        $totalChunks           = $this->request->getPost('resumableTotalChunks');

        // Ambil file chunk
        $file = $this->request->getFile('file');
        if (!$file) {
            log_message('error', 'File chunk tidak dikirim');
            return $this->response->setStatusCode(400)->setBody('File chunk tidak dikirim');
        }

        if (!$file->isValid()) {
            log_message('error', 'File chunk tidak valid: ' . $file->getError());
            return $this->response->setStatusCode(400)->setBody('File chunk tidak valid: ' . $file->getError());
        }

        // Simpan chunk
        try {
            $file->move($tempDir, $resumableIdentifier . '.' . $resumableChunkNumber, true);
            log_message('debug', "Chunk $resumableChunkNumber berhasil disimpan");
        } catch (\Exception $e) {
            log_message('error', 'Gagal menyimpan chunk: ' . $e->getMessage());
            return $this->response->setStatusCode(500)->setBody('Gagal menyimpan chunk');
        }

        // Cek semua chunk sudah ada
        $allChunksExist = true;
        for ($i = 1; $i <= $totalChunks; $i++) {
            $chunkPath = $tempDir . $resumableIdentifier . '.' . $i;
            if (!file_exists($chunkPath)) {
                $allChunksExist = false;
                log_message('debug', "Chunk $i belum ada, tunggu chunk berikutnya");
                break;
            }
        }

        // Gabungkan chunk jika lengkap
        if ($allChunksExist) {
            $finalFilePath = $finalDir . $resumableFilename;
            $finalFile = fopen($finalFilePath, 'wb');
            if (!$finalFile) {
                log_message('error', 'Gagal membuat file final: ' . $finalFilePath);
                return $this->response->setStatusCode(500)->setBody('Gagal membuat file final');
            }

            for ($i = 1; $i <= $totalChunks; $i++) {
                $chunkPath = $tempDir . $resumableIdentifier . '.' . $i;
                $chunk = fopen($chunkPath, 'rb');
                if ($chunk) {
                    stream_copy_to_stream($chunk, $finalFile);
                    fclose($chunk);
                    unlink($chunkPath);
                    log_message('debug', "Chunk $i berhasil digabung");
                } else {
                    log_message('error', "Chunk $i tidak bisa dibuka untuk digabung");
                }
            }
            fclose($finalFile);
            log_message('debug', "File final berhasil dibuat: " . $finalFilePath);
        }

        return $this->response->setStatusCode(200)->setBody('OK');
    }
}
