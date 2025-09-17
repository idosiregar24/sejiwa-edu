<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProfileModel;

class ProfileController extends BaseController
{
    public function index()
    {
        $profileModel = new ProfileModel();

        // Ambil userId langsung dari session
        $userId = session()->get('id');

        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Silakan login dulu');
        }

        // Ambil data profil berdasarkan user_id
        $profile = $profileModel->getProfileByUserId($userId);

        return view('user/profile_user', ['profile' => $profile]);
    }

    public function edit()
    {
        $profileModel = new ProfileModel();
        $userId = session()->get('id');

        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Silakan login dulu');
        }

        $profile = $profileModel->getProfileByUserId($userId);

        return view('user/profile_edit', ['profile' => $profile]);
    }

    public function update()
    {
        $profileModel = new ProfileModel();
        $userId = session()->get('id');

        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Silakan login dulu');
        }

        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'phone' => 'permit_empty|numeric'
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil data dari form
        $data = [
            'name'   => $this->request->getPost('name'),
            'email'  => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
        ];

        // Update ke database
        $profileModel->updateProfile($userId, $data);

        return redirect()->to('/profile')->with('success', 'Profil berhasil diperbarui');
    }
}
