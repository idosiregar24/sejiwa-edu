<?php

namespace App\Models;

use CodeIgniter\Model;

class OtpModel extends Model
{
    protected $table      = 'otp_codes';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id',
        'otp_code',
        'channel',
        'expires_at',
        'is_used',
        'is_verified',
        'purpose'
    ];

    protected $useTimestamps = true;
}
