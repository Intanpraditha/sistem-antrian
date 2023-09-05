<?php

namespace App\Controllers;

use App\Models\AntrianModel;
use CodeIgniter\Controller;

class AntrianController extends Controller
{
    public function index()
    {
        $model = new AntrianModel();
        $data['antrian'] = $model->getAllAntrian();

        return view('antrian/index', $data);
    }

    public function detail($id)
    {
        $model = new AntrianModel();
        $data['antrian'] = $model->getAntrianById($id);

        return view('antrian/detail', $data); // Ganti 'pasien/detail' dengan lokasi view yang sesuai
    }

    public function create()
    {
        // Menampilkan form tambah data antrian
        return view('antrian/create');
    }

    public function store()
    {
        $model = new AntrianModel();
        $data = [
            'no_antrian' => $this->request->getVar('no_antrian'),
            'tgl' => $this->request->getVar('tgl'),
            'waktu' => $this->request->getVar('waktu'),
            'status' => $this->request->getVar('status'),
            'id_dokter' => $this->request->getVar('id_dokter'),
            'id_pasien' => $this->request->getVar('id_pasien'),
        ];

        $model->addAntrian($data);
        return redirect()->to('/antrian');
    }

    public function edit($id)
    {
        $model = new AntrianModel();
        $data['antrian'] = $model->getAntrianById($id);

        return view('antrian/edit', $data);
    }

    public function update($id)
    {
        $model = new AntrianModel();
        $data = [
            'no_antrian' => $this->request->getVar('no_antrian'),
            'tgl' => $this->request->getVar('tgl'),
            'waktu' => $this->request->getVar('waktu'),
            'status' => $this->request->getVar('status'),
            'id_dokter' => $this->request->getVar('id_dokter'),
            'id_pasien' => $this->request->getVar('id_pasien'),
        ];

        $model->updateAntrian($id, $data);
        return redirect()->to('/antrian');
    }

    public function delete($id)
    {
        $model = new AntrianModel();
        $model->deleteAntrian($id);
        return redirect()->to('/antrian');
    }
}
