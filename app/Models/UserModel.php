<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $returnType = 'array';

    protected $allowedFields = [
        'name',
        'email',
        'phone',
        'date_of_birth',
        'password',
        'role',
        'is_verified',
        'created_at',
        'updated_at' // Tambahkan ini
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getAllUsers()
    {
        return $this->findAll();
    }

    public function getUserById($id)
    {
        return $this->find($id);
    }

    public function deleteUserById($id)
    {
        return $this->delete($id);
    }

    public function updateUserById($id, $data)
    {
        return $this->update($id, $data);
    }

    public function isEmailOrPhoneExist(string $value): bool
    {
        return $this->where('email', $value)
            ->orWhere('phone', $value)
            ->first() !== null;
    }

    public function createUser(array $data): array|false
    {
        $userId = $this->insert($data);

        if (!$userId) {
            return false;
        }

        return $this->find($userId);
    }
}
