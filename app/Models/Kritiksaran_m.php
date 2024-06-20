<?php

namespace App\Models;

use CodeIgniter\Model;

class Kritiksaran_m extends Model
{
    protected $table = 'kritik_dan_saran';
    protected $primaryKey = 'id_kritik_saran';
    protected $allowedFields = ['id_kritik_saran', 'kritik_saran'];


    public function getDataKritikSaran()
    {
        return $this->db->table('kritik_dan_saran')
            ->orderBy('id_kritik_saran', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function detailKritikSaran($id_kritik_saran = false)
    {
        if ($id_kritik_saran == false) {
            return $this->getDataKritikSaran();
        }

        return $this->where(['id_kritik_saran' => $id_kritik_saran])->first();
    }
}
