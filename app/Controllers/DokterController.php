<?php

namespace App\Controllers;

use App\Models\DokterModel;
use CodeIgniter\Controller;

class DokterController extends Controller
{
    public function index()
    {
        $model = new DokterModel();
        $data['dokter'] = $model->getAllDokter();

        return view('dokter/index', $data);
    }

    public function create()
    {
        return view('dokter/create');
    }

    public function store()
    {
        $model = new DokterModel();
        $data = [
            'nama_dokter' => $this->request->getVar('nama_dokter'),
            'jadwal' => $this->request->getVar('jadwal'),
            'id_admin' => $this->request->getVar('id_admin'),
        ];

        $model->addDokter($data);
        return redirect()->to('/dokter');
    }

    public function edit($id)
    {
        $model = new DokterModel();
        $data['dokter'] = $model->getDokterById($id);

        return view('dokter/edit', $data);
    }

    public function update($id)
    {
        $model = new DokterModel();
        $data = [
            'nama_dokter' => $this->request->getVar('nama_dokter'),
            'jadwal' => $this->request->getVar('jadwal'),
            'id_admin' => $this->request->getVar('id_admin'),
        ];

        $model->updateDokter($id, $data);
        return redirect()->to('/dokter');
    }

    public function delete($id)
    {
        $model = new DokterModel();
        $model->deleteDokter($id);
        return redirect()->to('/dokter');
    }
}
