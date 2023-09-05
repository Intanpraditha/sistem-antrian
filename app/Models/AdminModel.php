<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    protected $allowedFields = ['username', 'nama_admin', 'password'];

    public function getAllAdmin()
    {
        return $this->findAll();
    }

    public function getAdminById($id)
    {
        return $this->find($id);
    }

    public function addAdmin($data)
    {
        return $this->insert($data);
    }

    public function updateAdmin($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteAdmin($id)
    {
        return $this->delete($id);
    }
}
