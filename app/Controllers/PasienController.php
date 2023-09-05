<?php

namespace App\Controllers;

use App\Models\PasienModel;
use CodeIgniter\Controller;

class PasienController extends Controller
{
    public function index()
    {
        $model = new PasienModel();
        $data['pasien'] = $model->getAllPasien();

        return view('pasien/index', $data); // Ganti 'pasien/index' dengan lokasi view yang sesuai
    }

    public function detail($id)
    {
        $model = new PasienModel();
        $data['pasien'] = $model->getPasienById($id);

        return view('pasien/detail', $data); // Ganti 'pasien/detail' dengan lokasi view yang sesuai
    }

    public function create()
    {
        // Menampilkan form tambah data pasien
        return view('pasien/create'); // Ganti 'pasien/create' dengan lokasi view yang sesuai
    }

    public function store()
    {
        $model = new PasienModel();
        $data = [
            'nama_pasien' => $this->request->getVar('nama_pasien'),
            'no_bpjs' => $this->request->getVar('no_bpjs'),
            'nik' => $this->request->getVar('nik'),
            'jk' => $this->request->getVar('jk'),
            'usia' => $this->request->getVar('usia'),
            'no_telp' => $this->request->getVar('no_telp'),
        ];
        
        $model->addPasien($data);
        return redirect()->to('/pasien'); // Ganti '/pasien' dengan URL yang sesuai
    }

    public function edit($id)
    {
        $model = new PasienModel();
        $data['pasien'] = $model->getPasienById($id);

        return view('pasien/edit', $data); // Ganti 'pasien/edit' dengan lokasi view yang sesuai
    }

    public function update($id)
    {
        $model = new PasienModel();
        $data = [
            'nama_pasien' => $this->request->getVar('nama_pasien'),
            'no_bpjs' => $this->request->getVar('no_bpjs'),
            'nik' => $this->request->getVar('nik'),
            'jk' => $this->request->getVar('jk'),
            'usia' => $this->request->getVar('usia'),
            'no_telp' => $this->request->getVar('no_telp'),
        ];

        $model->updatePasien($id, $data);
        return redirect()->to('/pasien'); // Ganti '/pasien' dengan URL yang sesuai
    }

    public function delete($id)
    {
        $model = new PasienModel();
        $model->deletePasien($id);
        return redirect()->to('/pasien'); // Ganti '/pasien' dengan URL yang sesuai
    }
}
