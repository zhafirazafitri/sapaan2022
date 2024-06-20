<?php

namespace App\Controllers;

use App\Models\Kunjungan_m;
use App\Models\Auth_m;
use App\Models\Instansitujuan_m;
use App\Models\Maksudkunjungan_m;
use App\Models\Kritiksaran_m;

class Admin extends BaseController
{
    protected $authModel;
    protected $kunjunganModel;
    protected $instansitujuanModel;
    protected $maksudkunjunganModel;
    protected $kritiksaranModel;

    public function __construct()
    {
        date_default_timezone_set("Asia/Jakarta");

        session();
        helper('form');
        $this->authModel = new Auth_m();
        $this->instansitujuanModel = new Instansitujuan_m();
        $this->maksudkunjunganModel = new Maksudkunjungan_m();
        $this->kunjunganModel = new Kunjungan_m();
        $this->kritiksaranModel = new Kritiksaran_m();
    }

    public function index()
    {
        $data = [
            'jumlah' => $this->kunjunganModel->countDataHari(),
            'jumlah2' => $this->kunjunganModel->countDataBulan()

        ];

        return view('admin/index', $data);
    }

    // ------------------------------------------------- Data Pengunjung ------------------------------------- //


    public function dataPengunjung()
    {
        $data = [
            'data_pengunjung' => $this->kunjunganModel->detailKunjungan()
        ];

        return view('admin/data-pengunjung', $data);
    }

    public function detailDataPengunjung($id_kunjungan)
    {

        $data = [

            'kunjungan' => $this->kunjunganModel->detailKunjungan($id_kunjungan),
            'ins' => $this->instansitujuanModel->getDataInstansiTujuan(),
            'mksd' => $this->maksudkunjunganModel->getDataMaksudKunjungan(),
            'status' => $this->kunjunganModel->getDataStatus()
        ];

        return view('admin/detail-kunjungan', $data);
    }

    public function delete($id_kunjungan)
    {
        $this->kunjunganModel->delete($id_kunjungan);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
        return redirect()->to('admin/dataPengunjung');
    }

    public function editDataPengunjung($id_kunjungan)
    {
        $dt = $this->kunjunganModel->getDataKunjungan($id_kunjungan);
        $data = [
            'dt' => $dt,
            'ins' => $this->instansitujuanModel->getDataInstansiTujuan(),
            'mksd' => $this->maksudkunjunganModel->getDataMaksudKunjungan(),
            'status' => $this->kunjunganModel->getDataStatus(),
            'validation' => \Config\Services::validation(),
            'kunjungan' => $this->kunjunganModel->detailKunjungan($id_kunjungan)

        ];
        return view('admin/edit-kunjungan', $data);
    }

    public function updateDataPengunjung($id_kunjungan)
    {
        $this->kunjunganModel->save([
            'id_kunjungan' => $id_kunjungan,
            'nama' => $this->request->getVar('nama'),
            'no_identitas' => $this->request->getVar('no_identitas'),
            'instansi_asal' => $this->request->getVar('instansi_asal'),
            'ket' => $this->request->getVar('ket'),
            'dokumen' => $this->request->getVar('dokumen'),
            'tanggal_kunjungan' => $this->request->getVar('tanggal_kunjungan'),
            'jam_kunjungan' => $this->request->getVar('jam_kunjungan'),
            'id_instansi' => $this->request->getVar('id_instansi'),
            'id_mk' => $this->request->getVar('id_mk'),
            'id_status' => $this->request->getVar('id_status')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah!');

        return redirect()->to('admin/dataPengunjung');
    }

    // ------------------------------------------------- Data Instansi Tujuan ------------------------------------------------- //
    public function dataInstansiTujuan()
    {

        $data = [
            'data_instansitujuan' => $this->instansitujuanModel->detailInstansiTujuan()
        ];

        return view('admin/data-instansi-tujuan', $data);
    }

    public function saveInstansiTujuan()
    {

        $this->instansitujuanModel->save([

            'nama_instansi' => $this->request->getVar('nama_instansi')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');

        return redirect()->to('admin/dataInstansiTujuan');
    }

    public function deleteInstansiTujuan($id_instansi)
    {

        $this->instansitujuanModel->delete($id_instansi);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
        return redirect()->to('admin/dataInstansiTujuan');
    }

    public function editInstansiTujuan($id_instansi)
    {
        $data = [
            'instansi_tujuan' => $this->instansitujuanModel->detailInstansiTujuan($id_instansi)

        ];
        return view('admin/edit-instansitujuan', $data);
    }


    public function updateInstansiTujuan($id_instansi)
    {
        $this->instansitujuanModel->save([
            'id_instansi' => $id_instansi,
            'nama_instansi' => $this->request->getVar('nama_instansi'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah!');

        return redirect()->to('admin/dataInstansiTujuan');
    }


    // ----------------------------------- Data Maksud Kunjungan---------------------- //
    public function dataMaksudKunjungan()
    {
        $data = [
            'mksd_kunjungan' => $this->maksudkunjunganModel->detailMaksudKunjungan()
        ];

        return view('admin/data-maksud-kunjungan', $data);
    }

    public function saveMaksudKunjungan()
    {

        $this->maksudkunjunganModel->save([

            'mk' => $this->request->getVar('mk')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');

        return redirect()->to('admin/dataMaksudKunjungan');
    }

    public function deleteMaksudKunjungan($id_mk)
    {

        $this->maksudkunjunganModel->delete($id_mk);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
        return redirect()->to('admin/dataMaksudKunjungan');
    }

    public function editMaksudKunjungan($id_mk)
    {
        $data = [
            'mksd_kunjungan' => $this->maksudkunjunganModel->detailMaksudKunjungan($id_mk)

        ];
        return view('admin/edit-maksudkunjungan', $data);
    }


    public function updateMaksudKunjungan($id_mk)
    {
        $this->maksudkunjunganModel->save([
            'id_mk' => $id_mk,
            'mk' => $this->request->getVar('mk'),
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Diubah!');

        return redirect()->to('admin/dataMaksudKunjungan');
    }


    // ----------------------------------- Data Kritik dan Saran -------------------------------- //
    public function dataKritikSaran()
    {
        $data = [
            'ks' => $this->kritiksaranModel->detailKritikSaran()
        ];

        return view('admin/data-kritik-saran', $data);
    }

    public function deleteKritikSaran($id_kritik_saran)
    {
        $this->kritiksaranModel->delete($id_kritik_saran);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
        return redirect()->to('admin/dataKritikSaran');
    }

    // ----------------------------------- View PDF  --------------------------------- //
    public function viewpdf($id_kunjungan)
    {

        $data = [
            'kunjungan' => $this->kunjunganModel->detailKunjungan($id_kunjungan)
        ];

        return view('admin/view-pdf', $data);
    }
}
