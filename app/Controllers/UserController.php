<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ContentModel;
use App\Models\OtpModel;
use CodeIgniter\I18n\Time;

class UserController extends BaseController
{
    protected $contentModel;

    public function __construct()
    {
        $this->contentModel = new ContentModel();
    }

    public function dashboard()
    {
        $videos = $this->contentModel
                       ->where('type', 'Video')
                       ->where('status', 'Published')
                       ->findAll();

        return view('user/dashboard_user', ['videos' => $videos]);
    }
}
    