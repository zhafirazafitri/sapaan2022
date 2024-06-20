<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Instansi Tujuan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item">Data Instansi Tujuan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section section-data-instansi-tujuan">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <button type="button" class="btn btn-tambah-instansi btn-secondary  mt-3" data-bs-toggle="modal" data-bs-target="#modal-tambah-data-instansi-tujuan">
                                Tambah
                                <i class="bi bi-plus-lg"></i>
                            </button>
                        </div>
                        <!-- Default Table -->
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-sucess" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                        <table id="dtKunjungan" class="table table-hover align-middle text-center">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama Instansi Tujuan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($data_instansitujuan as $dit) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $dit['nama_instansi']; ?></td>
                                        <td>
                                            <div class="row">
                                                <a href="/admin/editInstansiTujuan/<?= $dit['id_instansi']; ?>" class="btn btn-edit btn-primary  mt-3">
                                                    <i class="bi bi-pencil-fill"></i>
                                                    Edit
                                                </a>
                                            </div>
                                            <div class="row">
                                                <form action="/admin/deleteInstansiTujuan/<?= $dit['id_instansi']; ?>" method="post">
                                                    <?= csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-hapus btn-primary mt-3" onclick="return confirm('apakah anda yakin?');">
                                                        <i class="bi bi-trash3-fill"></i>Hapus
                                                    </button>
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
                <!-- Modal Tambah-->
                <div class="modal fade modal-edit" id="modal-tambah-data-instansi-tujuan" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tambah Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/admin/saveInstansiTujuan" method="post">
                                    <?= csrf_field(); ?>
                                    <div class="form-group">
                                        <label for="nama_instansi">Nama Instansi Tujuan</label>
                                        <input type="text" class="form-control" name="nama_instansi" id="nama_instansi" placeholder="Nama Instansi Tujuan" required>
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary btn-simpan">Simpan</button>
                                <button type="button" class="btn btn-secondary btn-tutup" data-bs-dismiss="modal">Close</button>
                            </div>
                            </form>
                            <?php echo form_close() ?>
                        </div>
                    </div>
                </div><!-- End Modal Tambah -->

</main><!-- End #main -->

<?= $this->endSection(''); ?>