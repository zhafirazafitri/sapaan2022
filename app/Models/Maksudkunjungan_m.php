<?php

namespace App\Models;

use CodeIgniter\Model;

class Maksudkunjungan_m extends Model
{
    protected $table = 'maksud_kunjungan';
    protected $primaryKey = 'id_mk';
    protected $allowedFields = ['id_mk', 'mk'];


    public function getDataMaksudKunjungan()
    {
        return $this->db->table('maksud_kunjungan')
            ->orderBy('id_mk', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function detailMaksudKunjungan($id_mk = false)
    {
        if ($id_mk == false) {
            return $this->getDataMaksudKunjungan();
        }

        return $this->where(['id_mk' => $id_mk])->first();
    }
}
