<?php

namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $table = 'pasien'; // Ganti 'pasien' dengan nama tabel yang sesuai
    protected $primaryKey = 'id_pasien';
    protected $allowedFields = ['nama_pasien', 'no_bpjs', 'nik', 'jk', 'usia', 'no_telp'];

    // Fungsi untuk mengambil semua data pasien
    public function getAllPasien()
    {
        return $this->findAll();
    }

    // Fungsi untuk mengambil data pasien berdasarkan ID
    public function getPasienById($id)
    {
        return $this->find($id);
    }

    // Fungsi untuk menambahkan data pasien baru
    public function addPasien($data)
    {
        return $this->insert($data);
    }

    // Fungsi untuk mengupdate data pasien
    public function updatePasien($id, $data)
    {
        return $this->update($id, $data);
    }

    // Fungsi untuk menghapus data pasien
    public function deletePasien($id)
    {
        return $this->delete($id);
    }
}
