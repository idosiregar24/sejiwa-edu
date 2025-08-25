<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\OtpModel;
use CodeIgniter\I18n\Time;

class UserController extends BaseController
{

public function dashboard(){
        return view('user/dashboard_user');
    }


}