<?php

namespace App\Controllers;

use App\Models\AdminModel;
use CodeIgniter\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $model = new AdminModel();
        $data['admin'] = $model->getAllAdmin();

        return view('admin/index', $data);
    }

    public function create()
    {
        return view('admin/create');
    }

    public function store()
    {
        $model = new AdminModel();
        $data = [
            'username' => $this->request->getVar('username'),
            'nama_admin' => $this->request->getVar('nama_admin'),
            'password' => $this->request->getVar('password'),
        ];

        $model->addAdmin($data);
        return redirect()->to('/admin');
    }

    public function edit($id)
    {
        $model = new AdminModel();
        $data['admin'] = $model->getAdminById($id);

        return view('admin/edit', $data);
    }

    public function update($id)
    {
        $model = new AdminModel();
        $data = [
            'username' => $this->request->getVar('username'),
            'nama_admin' => $this->request->getVar('nama_admin'),
            'password' => $this->request->getVar('password'),
        ];

        $model->updateAdmin($id, $data);
        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $model = new AdminModel();
        $model->deleteAdmin($id);
        return redirect()->to('/admin');
    }
}
