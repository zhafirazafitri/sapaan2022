<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Detail Data Pengunjung</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item"> Detail Data Pengunjung</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section section-detail-kunjungan">
        <!-- Multi Columns Form -->
        <form class="row col-lg-10 text-dark" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="col-md-12">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" value="<?= $kunjungan['nama']; ?>" readonly>
            </div>
            <div class="col-md-12">
                <label for="no_identitas" class="form-label">No. Identitas</label>
                <input type="text" class="form-control" id="no_identitas" value="<?= $kunjungan['no_identitas']; ?>" readonly>
            </div>
            <div class="col-md-12">
                <label for="instansi_asal" class="form-label">Instansi Asal</label>
                <input type="text" class="form-control" id="instansi_asal" value="<?= $kunjungan['instansi_asal']; ?>" readonly>
            </div>
            <div class="col-md-6">
                <label for="tanggal_kunjungan" class="form-label">Tanggal Kunjungan</label>
                <input type="date" class="form-control" id="tanggal_kunjungan" value="<?= $kunjungan['tanggal_kunjungan']; ?>" readonly>
            </div>
            <div class="col-md-6">
                <label for="jam_kunjungan" class="form-label">Jam Kunjungan</label>
                <input type="time" class="form-control" id="jam_kunjungan" value="<?= $kunjungan['jam_kunjungan']; ?>" readonly>
            </div>
            <!-- yeye -->
            <div class="col-md-12">
                <label for="id_instansi" class="form-label">Instansi Tujuan</label>
                <?php foreach ($ins as $instansi) :
                    if ($instansi['id_instansi'] == $kunjungan['id_instansi']) {
                ?>
                        <input type="text" class="form-control" id="id_instansi" value="<?= $instansi['nama_instansi']; ?>" readonly>
                <?php
                    }
                endforeach; ?>
            </div>
            <div class="col-md-12">
                <label for="id_mk" class="form-label">Maksud Kunjungan</label>
                <?php foreach ($mksd as $maksud) :
                    if ($maksud['id_mk'] == $kunjungan['id_mk']) {
                ?>
                        <input type="text" class="form-control" id="id_mk" value="<?= $maksud['mk']; ?>" readonly>
                <?php
                    }
                endforeach; ?>

            </div>
            <div class="col-md-12">
                <label for="ket" class="form-label">Keterangan Maksud Kunjungan</label>
                <input type="text" class="form-control" id="ket" value="<?= $kunjungan['ket']; ?>" readonly>
            </div>
            <div class="col-md-4">
                <label for="dokumen" class="form-label">Dokumen</label>
                <input type="text" class="form-control" id="dokumen" value="<?= $kunjungan['dokumen']; ?>" readonly>
                <a href="<?= base_url('admin/viewpdf/' . $kunjungan['id_kunjungan']) ?>" class="btn btn-lihat-dokumen btn-primary mt-3">Lihat dokumen
                    <i class="bi bi-file-earmark-fill"></i></a>
            </div>
            <div class="col-md-12">
                <label for="id_status" class="form-label">Status</label>
                <?php foreach ($status as $s) :
                    if ($s['id_status'] == $kunjungan['id_status']) {
                ?>
                        <input type="text" class="form-control" id="id_status" value="<?= $s['status']; ?>" readonly>
                <?php
                    }
                endforeach; ?>
            </div>
            <div class="text-center mt-3">
                <a href="<?= base_url('admin/dataPengunjung') ?>" class="btn btn-kembali btn-secondary"><i class="bi bi-arrow-left-short"></i>Kembali</a>
            </div>
        </form><!-- End Multi Columns Form -->
        </div>
        </div>
        </div>
    </section><!-- End Form Kunjungan Section -->
    <?= $this->endSection(''); ?>