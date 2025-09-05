<?php

namespace App\Models;

use CodeIgniter\Model;

class ContentModel extends Model
{
    protected $table = 'contents';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'title', 'type', 'category', 'body', 'thumbnail', 'status', 'created_at', 'updated_at'
    ];
    protected $useTimestamps = true;

    public function getAllContent()
    {
        return $this->findAll();
    }

    public function getContentById($id)
    {
        return $this->find($id);
    }

    public function insertContent($data)
    {
        return $this->insert($data);
    }

    public function updateContent($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteContent($id)
    {
        return $this->delete($id);
    }

    public function getContentStats()
    {
        return [
            'total'     => $this->countAll(),
            'published' => $this->where('status', 'Publish')->countAllResults(),
            'draft'     => $this->where('status', 'Draft')->countAllResults(),
            'archived'  => $this->where('status', 'Archived')->countAllResults(),
        ];
    }
}
