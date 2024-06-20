<?php

namespace App\Models;

use CodeIgniter\Model;

class Instansitujuan_m extends Model
{
    protected $table = 'instansi_tujuan';
    protected $primaryKey = 'id_instansi';
    protected $allowedFields = ['id_instansi', 'nama_instansi'];

    public function getDataInstansiTujuan()
    {
        return $this->db->table('instansi_tujuan')
            ->orderBy('id_instansi', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function detailInstansiTujuan($id_instansi = false)
    {
        if ($id_instansi == false) {
            return $this->getDataInstansiTujuan();
        }

        return $this->where(['id_instansi' => $id_instansi])->first();
    }
}
