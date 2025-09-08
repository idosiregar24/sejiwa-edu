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
        $data = [
            'contents' => $this->contentModel->getAllContent(),
            'stats'    => $this->contentModel->getContentStats()
        ];

        return view('admin/content-management', $data);
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
    $uploadDir = WRITEPATH . '../public/uploads/';
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

    return redirect()->to('content');
    }

    public function edit($id)
    {
        $data['content'] = $this->contentModel->getContentById($id);
        return view('admin/content-edit', $data);
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

        return redirect()->to('/content');
    }

    public function delete($id)
    {
        $this->contentModel->deleteContent($id);
        return redirect()->to('/content');
    }
}
