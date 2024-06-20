<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>


<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Instansi Tujuan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item"> Edit Intansi Tujuan</li>
            </ol>
        </nav>
    </div>

    <section class="section section-edit-instansi-tujuan">
        <div class="mt-3">
            <a href="<?= base_url('admin/dataInstansiTujuan') ?>" class="btn btn-kembali btn-secondary"><i class="bi bi-arrow-left-short"></i></a>
        </div>
        <form action="/admin/updateInstansiTujuan/<?= $instansi_tujuan['id_instansi']; ?>" method="post" class="row col-lg-10 text-dark mt-3">
            <?= csrf_field(); ?>
            <input type="hidden" name="id_instansi" value="<?= $instansi_tujuan['id_instansi']; ?>">
            <div class="col-md-12">
                <label for="nama_instansi" class="form-label">Nama Instansi Tujuan</label>
                <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" value="<?= $instansi_tujuan['nama_instansi']; ?>">
            </div>

            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary btn-ubah">Ubah <i class="bi bi-pencil-square"></i></button>
            </div>
        </form>
    </section>
    <?= $this->endSection(''); ?>