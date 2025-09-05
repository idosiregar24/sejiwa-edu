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
        $this->contentModel->insertContent([
            'title'    => $this->request->getPost('title'),
            'type'     => $this->request->getPost('type'),
            'category' => $this->request->getPost('category'),
            'body'     => $this->request->getPost('body'),
            'status'   => $this->request->getPost('status'),
        ]);

        return redirect()->to('/content');
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
