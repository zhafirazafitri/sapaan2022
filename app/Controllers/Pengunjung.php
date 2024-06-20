<?php

namespace App\Controllers;

use App\Models\Kunjungan_m;
use App\Models\Instansitujuan_m;
use App\Models\Maksudkunjungan_m;
use App\Models\Kritiksaran_m;
use CodeIgniter\HTTP\Request;

class Pengunjung extends BaseController
{

    protected $kunjunganModel;
    protected $instansitujuanModel;
    protected $maksudkunjunganModel;
    protected $kritiksaranModel;

    public function __construct()
    {
        date_default_timezone_set("Asia/Jakarta");

        session();
        helper('form');
        helper('url');
        $this->kunjunganModel = new Kunjungan_m();
        $this->instansitujuanModel = new Instansitujuan_m();
        $this->maksudkunjunganModel = new Maksudkunjungan_m();
        $this->kritiksaranModel = new Kritiksaran_m();
    }

    public function index()
    {
        $dt = $this->kunjunganModel->getDataKunjungan();
        $data = [
            'dt' => $dt,
            'ins' => $this->instansitujuanModel->getDataInstansiTujuan(),
            'mksd' => $this->maksudkunjunganModel->getDataMaksudKunjungan(),
            'status' => $this->kunjunganModel->getDataStatus(),
            'validation' => \Config\Services::validation(),
            'ks' => $this->kritiksaranModel->detailKritikSaran(),
            'jumlah' => $this->kunjunganModel->countDataHari(),
            'jumlah2' => $this->kunjunganModel->countDataBulan()

        ];

        return view('pengunjung/index', $data);
    }

    public function save()
    {

        if (!$this->validate([
            'dokumen' => [

                'rules' => 'uploaded[dokumen]|max_size[dokumen,2048]|ext_in[dokumen,pdf]',
                'erros' => [
                    'uploaded' => 'Pilih dokumen terlebih dahulu!',
                    'max_size' => 'Ukuran dokumen terlalu besar!',
                    'ext_in' => 'File yang dipilih bukan format pdf'
                ]
            ]
        ])) {

            return redirect()->to(site_url())->withInput();
        }


        $fileDokumen = $this->request->getFile('dokumen');

        $namaDokumen = $fileDokumen->getRandomName();

        $fileDokumen->move('dokumen', $namaDokumen);

        $this->kunjunganModel->save([
            'nama' => $this->request->getVar('nama'),
            'no_identitas' => $this->request->getVar('no_identitas'),
            'instansi_asal' => $this->request->getVar('instansi_asal'),
            'ket' => $this->request->getVar('ket'),
            'dokumen' => $namaDokumen,
            'tanggal_kunjungan' => $this->request->getVar('tanggal_kunjungan'),
            'jam_kunjungan' => $this->request->getVar('jam_kunjungan'),
            'id_instansi' => $this->request->getVar('id_instansi'),
            'id_mk' => $this->request->getVar('id_mk'),
            'id_status' => $this->request->getVar('id_status')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');

        return redirect()->to(site_url());
    }

    // ============================== Kritik dan Saran =========================//
    public function saveKritikSaran()
    {

        $this->kritiksaranModel->save([

            'kritik_saran' => $this->request->getVar('kritik_saran')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');

        return redirect()->to(site_url());
    }
}
