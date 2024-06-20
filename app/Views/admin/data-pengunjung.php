<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Pengunjung</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item">Data Pengunjung</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section section-data-pengunjung">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body mt-5">
                        <!-- Default Table -->
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-sucess" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                        <table id="dtKunjungan" class="table table table-hover align-middle text-center">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Instansi Asal</th>
                                    <th scope="col">Instansi Tujuan</th>
                                    <th scope="col">Maksud Kunjungan</th>
                                    <th scope="col">Ket</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($data_pengunjung as $dp) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $dp['nama']; ?></td>
                                        <td><?= $dp['instansi_asal']; ?></td>
                                        <td><?= $dp['nama_instansi']; ?></td>
                                        <td><?= $dp['mk']; ?></td>
                                        <td><?= $dp['ket']; ?></td>
                                        <?php
                                        if ($dp['status'] == 'Diproses') {
                                        ?>
                                            <td><span class="badge badge-diproses"><?= $dp['status']; ?></span></td>

                                        <?php
                                        } else if ($dp['status']  == 'Diterima') {
                                        ?>
                                            <td><span class="badge badge-diterima"><?= $dp['status']; ?></span></td>
                                        <?php
                                        } else {
                                        ?>
                                            <td><span class="badge badge-ditolak"><?= $dp['status']; ?></span></td>
                                        <?php
                                        }
                                        ?>
                                        <td>
                                            <div class="row">
                                                <a href="/admin/detailDataPengunjung/<?= $dp['id_kunjungan']; ?>" class="btn btn-detail btn-primary">
                                                    <i class="bi bi-list-ul"></i>
                                                    Detail
                                                </a>

                                            </div>
                                            <div class="row">
                                                <a href="/admin/editDataPengunjung/<?= $dp['id_kunjungan']; ?>" class="btn btn-edit btn-primary  mt-3">
                                                    <i class="bi bi-pencil-fill"></i>
                                                    Edit
                                                </a>
                                            </div>
                                            <div class="row">
                                                <form action="/admin/delete/<?= $dp['id_kunjungan']; ?>" method="post">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-hapus btn-primary mt-3" onclick="return confirm('apakah anda yakin?');">
                                                        <i class="bi bi-trash3-fill"></i>Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>
</main><!-- End #main -->
<?= $this->endSection(''); ?>