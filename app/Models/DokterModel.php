<?php

namespace App\Models;

use CodeIgniter\Model;

class DokterModel extends Model
{
    protected $table = 'dokter';
    protected $primaryKey = 'id_dokter';
    protected $allowedFields = ['nama_dokter', 'jadwal', 'id_admin'];

    public function getAllDokter()
    {
        return $this->findAll();
    }

    public function getDokterById($id)
    {
        return $this->find($id);
    }

    public function addDokter($data)
    {
        return $this->insert($data);
    }

    public function updateDokter($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteDokter($id)
    {
        return $this->delete($id);
    }
}
