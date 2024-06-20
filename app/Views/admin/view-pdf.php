<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Dokumen</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item">Dokumen / Data Pengunjung</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section section-view-pdf">
        <div class="col-12">
            <iframe src="<?= base_url('./dokumen/' . $kunjungan['dokumen']) ?>" height="900" width="900" title="dokumen">
            </iframe>
        </div>
    </section><!-- End Form Kunjungan Section -->
    <?= $this->endSection(''); ?>