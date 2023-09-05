<?php

namespace App\Models;

use CodeIgniter\Model;

class AntrianModel extends Model
{
    protected $table = 'antrian';
    protected $primaryKey = 'id_antrian';
    protected $allowedFields = ['no_antrian', 'tgl', 'waktu', 'status', 'id_dokter', 'id_pasien'];

    // Fungsi untuk mengambil semua data antrian
    public function getAllAntrian()
    {
        return $this->findAll();
    }

    // Fungsi untuk mengambil data antrian berdasarkan ID
    public function getAntrianById($id)
    {
        return $this->find($id);
    }

    // Fungsi untuk menambahkan data antrian baru
    public function addAntrian($data)
    {
        return $this->insert($data);
    }

    // Fungsi untuk mengupdate data antrian
    public function updateAntrian($id, $data)
    {
        return $this->update($id, $data);
    }

    // Fungsi untuk menghapus data antrian
    public function deleteAntrian($id)
    {
        return $this->delete($id);
    }
}
