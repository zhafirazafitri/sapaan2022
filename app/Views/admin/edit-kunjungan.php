<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Data Pengunjung</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item"> Edit Data Pengunjung</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section section-detail-kunjungan">
        <!-- Multi Columns Form -->
        <form action="/admin/updateDataPengunjung/<?= $kunjungan['id_kunjungan']; ?>" method="post" enctype="multipart/form-data" class="row col-lg-10 text-dark">
            <?= csrf_field(); ?>
            <input type="hidden" name="id_kunjungan" value="<?= $kunjungan['id_kunjungan']; ?>">
            <div class="col-md-12">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $kunjungan['nama']; ?>">
            </div>
            <div class="col-md-12">
                <label for="no_identitas" class="form-label">No. Identitas</label>
                <input type="text" class="form-control" id="no_identitas" name="no_identitas" value="<?= $kunjungan['no_identitas']; ?>">
            </div>
            <div class="col-md-12">
                <label for="instansi_asal" class="form-label">Instansi Asal</label>
                <input type="text" class="form-control" id="instansi_asal" name="instansi_asal" value="<?= $kunjungan['instansi_asal']; ?>">
            </div>
            <div class="col-md-6">
                <label for="tanggal_kunjungan" class="form-label">Tanggal Kunjungan</label>
                <input type="date" class="form-control" id="tanggal_kunjungan" name="tanggal_kunjungan" value="<?= $kunjungan['tanggal_kunjungan']; ?>">
            </div>
            <div class="col-md-6">
                <label for="jam_kunjungan" class="form-label">Jam Kunjungan</label>
                <input type="time" class="form-control" id="jam_kunjungan" name="jam_kunjungan" value="<?= $kunjungan['jam_kunjungan']; ?>">
            </div>
            <!-- yeye -->
            <div class="col-md-12">
                <label class="form-label" for="id_instansi">Instansi tujuan</label>
                <select class="form-control" name="id_instansi" id="id_instansi" required>
                    <?php foreach ($ins as $is) :
                        if ($is['id_instansi'] == $kunjungan['id_instansi']) {
                    ?>
                            <option value="<?= $is['id_instansi']; ?>"><?= $is['nama_instansi'] ?></option>
                    <?php
                        }
                    endforeach; ?>
                    <?php foreach ($ins as $is) : ?>
                        <option value="<?= $is['id_instansi']; ?>"><?= $is['nama_instansi']; ?></option>
                    <?php endforeach; ?>
                </select>

            </div>
            <div class="col-md-12">
                <label class="form-label" for="id_mk">Maksud Kunjungan</label>
                <select class="form-control" name="id_mk" id="id_mk" required>
                    <?php foreach ($mksd as $mk) :
                        if ($mk['id_mk'] == $kunjungan['id_mk']) {
                    ?>
                            <option value="<?= $mk['id_mk']; ?>"><?= $mk['mk']; ?></option>

                    <?php }
                    endforeach; ?>
                    <?php foreach ($mksd as $mk) : ?>
                        <option value="<?= $mk['id_mk']; ?>"><?= $mk['mk']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-12">
                <label for="ket" class="form-label">Keterangan Maksud Kunjungan</label>
                <input type="text" class="form-control" id="ket" name="ket" value="<?= $kunjungan['ket']; ?>">
            </div>
            <div class="col-md-4">
                <label for="dokumen" class="form-label">Dokumen</label>
                <input type="text" class="form-control" id="dokumen" name="dokumen" value="<?= $kunjungan['dokumen']; ?>">
                <a href="<?= base_url('admin/viewpdf/' . $kunjungan['id_kunjungan']) ?>" class="btn btn-lihat-dokumen btn-primary mt-3">Lihat dokumen <i class="bi bi-file-earmark-fill"></i></a>
            </div>
            <div class="col-md-12">
                <label for="id_status" class="form-label">Status</label>
                <select class="form-control" name="id_status" id="id_status" required>
                    <?php foreach ($status as $st) :
                        if ($st['id_status'] == $kunjungan['id_status']) {
                    ?>
                            <option value="<?= $st['id_status']; ?>"><?= $st['status']; ?></option>
                    <?php }
                    endforeach; ?>

                    <?php foreach ($status as $st) : ?>
                        <option value="<?= $st['id_status']; ?>"><?= $st['status']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary btn-ubah">Ubah <i class="bi bi-pencil-square"></i></button>
            </div>
        </form><!-- End Multi Columns Form -->
        <div class="text-center mt-3">
            <a href="<?= base_url('admin/dataPengunjung') ?>" class="btn btn-kembali btn-secondary"><i class="bi bi-arrow-left-short"></i>Kembali</a>
        </div>
        </div>
        </div>
        </div>
    </section><!-- End Form Kunjungan Section -->
    <?= $this->endSection(''); ?>