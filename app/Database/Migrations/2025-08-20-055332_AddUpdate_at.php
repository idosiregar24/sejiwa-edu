<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUpdatedAtToOtpCodes extends Migration
{
    public function up()
    {
        $fields = [
            'updated_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
                'after'   => 'created_at', // Tambahkan setelah created_at (opsional)
            ]
        ];

        $this->forge->addColumn('otp_codes', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('otp_codes', 'updated_at');
    }
}
