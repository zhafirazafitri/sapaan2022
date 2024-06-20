<?php

namespace App\Models;

use CodeIgniter\Model;

class Kunjungan_m extends Model
{
    protected $table = 'kunjungan';
    protected $primaryKey = 'id_kunjungan';
    protected $useTimestamps = 'true';
    protected $allowedFields = [
        'nama', 'no_identitas', 'instansi_asal', 'id_mk', 'ket',
        'dokumen', 'id_instansi', 'id_status', 'tanggal_kunjungan', 'jam_kunjungan'
    ];

    public function getDataKunjungan()
    {
        return $this->db->table('kunjungan')
            ->orderBy('kunjungan.id_kunjungan', 'DESC')
            ->join('maksud_kunjungan', 'maksud_kunjungan.id_mk=kunjungan.id_mk')
            ->join('status', 'status.id_status=kunjungan.id_status')
            ->join('instansi_tujuan', 'instansi_tujuan.id_instansi=kunjungan.id_instansi')
            ->get()
            ->getResultArray();
    }

    public function getDataStatus()
    {
        return $this->db->table('status')
            ->orderBy('id_status', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function detailKunjungan($id_kunjungan = false)
    {
        if ($id_kunjungan == false) {
            return $this->getDataKunjungan();
        }

        return $this->where(['id_kunjungan' => $id_kunjungan])->first();
    }

    public function countDataHari()
    {
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date('Y-m-d');
        return $this->db->table('kunjungan')
            ->select('id_kunjungan')
            ->where('tanggal_kunjungan = ', $tgl)
            ->countAllResults();
    }

    public function countDataBulan()
    {
        date_default_timezone_set('Asia/Jakarta');
        $tgl = date('m');
        return $this->db->table('kunjungan')
            ->select('id_kunjungan')
            ->where('MONTH(tanggal_kunjungan) =', $tgl)
            ->countAllResults();
    }
}
