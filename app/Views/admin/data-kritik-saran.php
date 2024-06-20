<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Data Kritik dan Saran</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item">Data Kritik dan Saran</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section section-data-pengunjung">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body mt-3">
                        <!-- Default Table -->
                        <table id="dtKritikSaran" class="table table-hover align-middle text-center">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Kritik dan Saran</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($ks as $k) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $k['kritik_saran']; ?></td>
                                        <td>
                                            <div class="row">
                                                <form action="/admin/deleteKritikSaran/<?= $k['id_kritik_saran']; ?>" method="post">
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