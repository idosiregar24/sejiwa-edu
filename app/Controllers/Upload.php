<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Upload extends Controller
{
    public function upload_chunk()
    {
        helper('filesystem');

        $tempDir  = WRITEPATH . 'uploads/temp/';
        $finalDir = FCPATH . 'uploads/video/';

        if (!is_dir($tempDir) && !mkdir($tempDir, 0777, true)) {
            return $this->response->setStatusCode(500)->setBody('Gagal membuat folder temp');
        }

        if (!is_dir($finalDir) && !mkdir($finalDir, 0777, true)) {
            return $this->response->setStatusCode(500)->setBody('Gagal membuat folder final');
        }

        $resumableIdentifier  = $this->request->getPost('resumableIdentifier');
        $resumableFilename    = $this->request->getPost('resumableFilename');
        $resumableChunkNumber = $this->request->getPost('resumableChunkNumber');
        $totalChunks          = $this->request->getPost('resumableTotalChunks');

        $file = $this->request->getFile('file');
        if (!$file || !$file->isValid()) {
            return $this->response->setStatusCode(400)->setBody('File chunk tidak valid');
        }


        try {
            $file->move($tempDir, $resumableIdentifier . '.' . $resumableChunkNumber, true);
        } catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setBody('Gagal menyimpan chunk: ' . $e->getMessage());
        }

        $allChunksExist = true;
        for ($i = 1; $i <= $totalChunks; $i++) {
            if (!file_exists($tempDir . $resumableIdentifier . '.' . $i)) {
                $allChunksExist = false;
                break;
            }
        }

        if ($allChunksExist) {
            $newName       = uniqid() . '_' . $resumableFilename;
            $finalFilePath = $finalDir . $newName;
            $publicPath    = 'uploads/video/' . $newName; // path yg dipakai di DB

            $finalFile = fopen($finalFilePath, 'wb');
            if (!$finalFile) {
                return $this->response->setStatusCode(500)->setJSON([
                    'success' => false,
                    'message' => 'Gagal membuat file final'
                ]);
            }

            for ($i = 1; $i <= $totalChunks; $i++) {
                $chunkPath = $tempDir . $resumableIdentifier . '.' . $i;
                $chunk = fopen($chunkPath, 'rb');
                stream_copy_to_stream($chunk, $finalFile);
                fclose($chunk);
                unlink($chunkPath);
            }
            fclose($finalFile);

            return $this->response->setJSON([
                'success'   => true,
                'file_path' => $publicPath
            ]);
        }


        return $this->response->setJSON([
            'success'       => true,
            'chunkReceived' => $resumableChunkNumber
        ]);
    }
}
