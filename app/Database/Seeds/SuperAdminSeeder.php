<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SuperAdminSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name'         => 'Super Admin Sejiwa',
            'email'        => ' ',
            'phone'        => '081363554262',
            'date_of_birth'=> '1990-01-01',
            'password'     => password_hash('Asdfg123@#', PASSWORD_DEFAULT),
            'role'         => 'admin',
            'is_verified'  => 1,
            'created_at'   => date('Y-m-d H:i:s'),
            'updated_at'   => date('Y-m-d H:i:s'),
        ];

        // Cegah double insert
        $exists = $this->db->table('users')
            ->where('email', $data['email'])
            ->get()
            ->getRow();

        if (!$exists) {
            $this->db->table('users')->insert($data);
        }
    }
}
