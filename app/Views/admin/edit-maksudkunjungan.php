<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>


<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Maksud Kunjungan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item"> Edit Maksud Kunjungan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section section-edit-maksud-kunjungan">
        <div class="mt-3">
            <a href="<?= base_url('admin/dataMaksudKunjungan') ?>" class="btn btn-kembali btn-secondary"><i class="bi bi-arrow-left-short"></i></a>
        </div>
        <!-- Multi Columns Form -->
        <form action="/admin/updateMaksudKunjungan/<?= $mksd_kunjungan['id_mk']; ?>" method="post" class="row col-lg-10 text-dark mt-3">
            <?= csrf_field(); ?>
            <input type="hidden" name="id_mk" value="<?= $mksd_kunjungan['id_mk']; ?>">
            <div class="col-md-12">
                <label for="mk" class="form-label">Maksud Kunjungan</label>
                <input type="text" class="form-control" id="mk" name="mk" value="<?= $mksd_kunjungan['mk']; ?>">
            </div>

            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary btn-ubah">Ubah <i class="bi bi-pencil-square"></i></button>
            </div>
        </form><!-- End Multi Columns Form -->
    </section>
    <?= $this->endSection(''); ?>