<?php

namespace App\Models;

use CodeIgniter\Model;

class jadwalModel extends Model
{
    protected $table = 'tbl_jadwal';
    protected $allowedFields = ['nama_kursus', 'ket_kursus', 'lama_kursus', 'gambar'];

    public function getJadwal($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id'=> $id])->first();
    }

}