<?php

namespace App\Controllers;

use App\Models\ContentModel;

class ContentController extends BaseController
{
    protected $contentModel;

    public function __construct()
    {
        $this->contentModel = new ContentModel();
    }

public function index()
{
    $jenis  = $this->request->getGet('jenis') ?? 'all';
    $status = $this->request->getGet('status') ?? 'all';
    $search = $this->request->getGet('search') ?? '';

    // Mulai query
    $query = $this->contentModel;

    // Filter jenis
    if ($jenis !== 'all') {
        $query = $query->where('type', ucfirst($jenis));
    }

    // Filter status
    if ($status !== 'all') {
        $query = $query->where('status', ucfirst($status));
    }

    // Filter pencarian
    if (!empty($search)) {
        $query = $query->like('title', $search)
                       ->orLike('description', $search);
    }

    $contents = $query->findAll();

    $data = [
        'contents' => $contents,
        'stats'    => $this->contentModel->getContentStats(),
        'jenis'    => $jenis,
        'status'   => $status,
        'search'   => $search,
    ];

    return view('admin/content/content-management', $data);
}

    


    public function create()
    {
        return view('admin/content/content_form');
    }

    public function store()
{
    $type = $this->request->getPost('type');
    $title = $this->request->getPost('title');
    $category = $this->request->getPost('category');
    $body = $this->request->getPost('body');
    $status = $this->request->getPost('status');


    // Tentukan folder upload berdasarkan tipe
    // $uploadDir = WRITEPATH . '../public/uploads/';
    $uploadDir = FCPATH . 'uploads/';
    $filePath = null;

    if ($type === 'Infografis' && $this->request->getFile('infographic')->isValid()) {
        $file = $this->request->getFile('infographic');
        $newName = uniqid() . '_' . $file->getName();
        $file->move($uploadDir . 'infografis/', $newName);
        $filePath = 'uploads/infografis/' . $newName;
    } elseif ($type === 'Video' && $this->request->getFile('video')->isValid()) {
        $file = $this->request->getFile('video');
        $newName = uniqid() . '_' . $file->getName();
        $file->move($uploadDir . 'video/', $newName);
        $filePath = 'uploads/video/' . $newName;    
    } elseif ($type === 'Audio' && $this->request->getFile('audio')->isValid()) {
        $file = $this->request->getFile('audio');
        $newName = uniqid() . '_' . $file->getName();
        $file->move($uploadDir . 'audio/', $newName);
        $filePath = 'uploads/audio/' . $newName;
    }

    // Thumbnail (opsional)
    $thumbnailPath = null;
    if ($this->request->getFile('thumbnail')->isValid()) {
        $thumb = $this->request->getFile('thumbnail');
        $thumbName = uniqid() . '_' . $thumb->getName();
        $thumb->move($uploadDir . 'thumbnail/', $thumbName);
        $thumbnailPath = 'uploads/thumbnail/' . $thumbName;
    }

    $this->contentModel->insertContent([
        'title'      => $title,
        'type'       => $type,
        'category'   => $category,
        'body'       => $body,
        'status'     => $status,
        'file_path'  => $filePath,
        'thumbnail'  => $thumbnailPath,
    ]);

    return redirect()->to('content-management');
    }

    public function edit($id)
    {
        $data['content'] = $this->contentModel->getContentById($id);
        return view('admin/content/edit-content', $data);
    }

    public function update($id)
    {
        $this->contentModel->updateContent($id, [
            'title'    => $this->request->getPost('title'),
            'type'     => $this->request->getPost('type'),
            'category' => $this->request->getPost('category'),
            'body'     => $this->request->getPost('body'),
            'status'   => $this->request->getPost('status'),
        ]);

        return redirect()->to('content-management');
    }

    public function delete($id)
    {
        if ($this->contentModel->delete($id)) {
            return redirect()->to(base_url('content-management'))
                            ->with('success', 'Konten berhasil dihapus');
        } else {
            return redirect()->to(base_url('content-management'))
                            ->with('error', 'Konten gagal dihapus');
        }
    }

}