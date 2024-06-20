<?= $this->extend('pengunjung/layout/template'); ?>
<?= $this->section('content'); ?>
<main id="main">
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Selamat Datang di SAPAAN</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">(Sistem Informasi Pelayanan Kunjungan)</h2>
                    <h3 data-aos="fade-up" data-aos-delay="400">Dinas Komunikasi dan Informatika</h3>
                    <h3 data-aos="fade-up" data-aos-delay="400">Kota Palembang</h3>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#form-kunjungan" class="btn-get-started scrollto d-inline-flex align-items-center 
                                justify-content-center align-self-center">
                                <span>Isi kunjungan</span>
                                <i class="bi bi-pencil-square"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="<?= base_url(); ?>/assets/img/herofix.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <!-- ======= Alur Kunjungan Section ======= -->
    <section id="alur-kunjungan" class="alur">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Alur Kunjungan</h2>
                <div class="border-center">
            </header>

            <div class="row gy-4" data-aos="fade-left">

                <div class="col-lg-12" data-aos="zoom-in" data-aos-delay="100" justify-content-center>
                    <img src="<?= base_url(); ?>/assets/img/alurkunjungan.png" class="img-fluid img-alur" alt="">
                </div>

            </div>

    </section><!-- End Alur Kunjungan Section -->


    <!-- ======= Jumlah Kunjungan Section ======= -->
    <section id="features" class="features">

        <div class="container" data-aos="fade-up">
            <header class="section-header">
                <h2>Jumlah Kunjungan</h2>
                <div class="border-center mt-3">
            </header>

            <div class="row">

                <div class="col-lg-6 mt-5">
                    <img src="<?= base_url(); ?>/assets/img/hero-img-1.png" class="img-fluid img-alur" alt="">
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                    <div class="row align-self-center gy-4">

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                            <div class="col-lg-12 col-md-4">
                                <div class="count-box">
                                    <i class="bi bi-people" style="color: #fff;"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="<?= $jumlah; ?>" data-purecounter-duration="1" class="purecounter"></span>
                                        <p>Jumlah Kunjungan Hari Ini</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                            <div class="col-lg-12 col-md-4">
                                <div class="count-box">
                                    <i class="bi bi-people" style="color: #fff;"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="<?= $jumlah2; ?>" data-purecounter-duration="1" class="purecounter"></span>
                                        <p>Jumlah Kunjungan Bulan Ini</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">


                        </div> <!-- / row -->
                    </div>

    </section><!-- End Jumlah Kunjungan Section -->

    <!-- ======= Form Kunjungan Section ======= -->
    <section id="form-kunjungan" class="form-kunjungan">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Form Kunjungan</h2>
                <div class="border-center">
            </header>

            <div class="row gy-4 d-flex justify-content-center">
                <div class="card col-8">
                    <div class="card-body">
                        <form action="/pengunjung/save" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
                                <!--<div class="invalid-feedback">
                                    Nama harus diisi.
                                </div> -->
                            </div>
                            <div class="form-group">
                                <label for="no_identitas">No. Identitas</label>
                                <input type="text" class="form-control" name="no_identitas" id="no_identitas" placeholder="No. Identitas (KTP, PASPOR, NIP, SPT)" required>
                            </div>
                            <div class="form-group">
                                <label for="instansi_asal">Instansi Asal</label>
                                <input type="text" class="form-control" name="instansi_asal" id="instansi_asal" placeholder="Instansi Asal,  jika pribadi maka tulis ‘pribadi’" required>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="tanggal_kunjungan">Waktu Rencana Kunjungan</label>
                                        <input type="date" class="form-control" name="tanggal_kunjungan" id="tanggal_kunjungan" placeholder="mm/dd/yy" required>
                                    </div>
                                    <div class="col">
                                        <label for="jam_kunjungan"></label>
                                        <input type="time" class="form-control" name="jam_kunjungan" id="jam_kunjungan" placeholder="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="id_instansi">Instansi tujuan</label>
                                <select class="form-control" name="id_instansi" id="id_instansi" required>
                                    <option>--Pilih Instansi Tujuan--</option>
                                    <?php foreach ($ins as $is) : ?>
                                        <option value="<?= $is['id_instansi']; ?>"><?= $is['nama_instansi']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_mk">Maksud Kunjungan</label>
                                <select class="form-control" name="id_mk" id="id_mk" required>
                                    <option>--Pilih Maksud Kunjungan--</option>
                                    <?php foreach ($mksd as $mk) : ?>
                                        <option value="<?= $mk['id_mk']; ?>"><?= $mk['mk']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ket">Keterangan Maksud Kunjungan</label>
                                <textarea class="form-control" name="ket" id="ket" rows="3" placeholder="Keterangan Maksud Kunjungan" required></textarea>
                            </div>
                            <div class="form-group col-8">
                                <div class="row ms-0 mt-2">
                                    <label for="dokumen">Dokumen Pendukung (SPT, Surat Tugas, Surat Jalan, dll)</label>
                                    <input type="file" name="dokumen" class="form-control" id="dokumen" required>
                                    <label class="text-danger">*File harus format .pdf dengan uk max 2048KB</label>
                                </div>
                            </div>
                            <?php foreach ($status as $s) :
                                if ($s == 'Diproses') {
                            ?>
                                    <input type="hidden" class="form-control" name="id_status" id="id_status" value="<?= $s['id_status']; ?>">

                                <?php
                                } else if ($s == 'Diterima') {
                                ?>
                                    <input type="hidden" class="form-control" name="id_status" id="id_status" value="<?= $s['id_status']; ?>">
                                <?php
                                } else {
                                ?>
                                    <input type="hidden" class="form-control" name="id_status" id="id_status" value="<?= $s['id_status']; ?>">
                            <?php
                                }
                            endforeach; ?>
                            </select>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <button type="submit" id="simpanForm" class="btn btn-primary mt-3">Simpan</button>
                    </div>
                    </form>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
        </div>

    </section><!-- End Form Kunjungan Section -->

    <!-- ======= Data Kunjungan Section ======= -->
    <section id="data-kunjungan" class="data-kunjungan">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Data Kunjungan</h2>
                <div class="border-center">
            </header>

            <div class="row gy-4 d-flex justify-content-center" data-aos="fade-left">
                <div class="card col-10">
                    <div class="card-body">
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-sucess" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="table-responsive-md">
                            <table id="dtKunjungan" class="table table-striped table-bordered table-sm tableExample" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="th">No.

                                        </th>
                                        <th class="th">Nama

                                        </th>
                                        <th class="th">Instansi Asal

                                        </th>
                                        <th class="th">Instansi tujuan
                                        </th>
                                        <th class="th">Tanggal Kunjungan

                                        </th>
                                        <th class="th">Maksud Kunjungan

                                        </th>

                                        <th class="th">Status

                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($dt as $dt) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $dt['nama']; ?></td>
                                            <td><?= $dt['instansi_asal']; ?></td>
                                            <td><?= $dt['nama_instansi']; ?></td>
                                            <td><?= $dt['tanggal_kunjungan']; ?></td>
                                            <td><?= $dt['mk']; ?></td>

                                            <?php
                                            if ($dt['status'] == 'Diproses') {
                                            ?>
                                                <td><span class="badge badge-diproses"><?= $dt['status']; ?></span></td>

                                            <?php
                                            } else if ($dt['status']  == 'Diterima') {
                                            ?>
                                                <td><span class="badge badge-diterima"><?= $dt['status']; ?></span></td>
                                            <?php
                                            } else {
                                            ?>
                                                <td><span class="badge badge-ditolak"><?= $dt['status']; ?></span></td>
                                            <?php
                                            }
                                            ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

    </section><!-- End Data Kunjungan Section -->


    <!-- ======= Layanan Kami Section ======= -->
    <section id="layanan-kami" class="layanan">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Layanan Kami</h2>
                <div class="border-center">
            </header>

            <div class="row gy-4" data-aos="fade-left">

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <img src="<?= base_url(); ?>/assets/img/logo-plg.png" class="img-fluid img-web-plg" alt="">
                        <ul>
                            <li>Situs Resmi Pemerintah Kota Palembang</li>
                        </ul>
                        <a href="https://palembang.go.id/" class="btn-kunjungi">Kunjungi sekarang</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="box">
                        <img src="<?= base_url(); ?>/assets/img/white_sidemang.svg" class="img-fluid" alt="">
                        <ul>
                            <li>Sistem Administrasi Online Masyarakat Palembang</li>
                        </ul>
                        <a href="https://sidemang.palembang.go.id/" class="btn-kunjungi">Kunjungi sekarang</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box">
                        <img src="<?= base_url(); ?>/assets/img/logo-lapor.png" class="img-fluid" alt="">
                        <ul>
                            <li>Layanan Aspirasi dan Pengaduan Online Rakyat</li>
                        </ul>
                        <a href="https://www.lapor.go.id/" class="btn-kunjungi">Kunjungi sekarang</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="box">
                        <img src="<?= base_url(); ?>/assets/img/supportcallcenter.png" class="img-fluid img-callcenter" alt="">
                        <ul>
                            <li>Informasi Call Center Kota Palembang</li>
                        </ul>
                        <a href="https://palembang.go.id/call-center" class="btn-kunjungi">Kunjungi sekarang</a>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Layanan Kami Section -->

    <!-- ======= Kritik dan Saran Section ======= -->
    <section id="kritik-saran" class="kritik-saran">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Kritik dan Saran</h2>
                <div class="border-center">
            </header>
            <div class="row gy-4 d-flex justify-content-center">
                <div class="card col-6">
                    <div class="card-body">
                        <form action="/pengunjung/saveKritikSaran" method="post">
                            <div class="form-group">
                                <textarea class="form-control" name="kritik_saran" id="kritik_saran" rows="5" placeholder="Berikan Kritik dan Saran Anda" required>
                                </textarea>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary mt-3">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Kritik dan Saran Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Contact Us</h2>
                <div class="border-center">
            </header>

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-8-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Alamat</h3>
                                <p>Jl. Nyoman Ratu No.1271, Sungai Pangeran, Palembang, Kota Palembang, Sumatera Selatan 30113</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>Telepon</h3>
                                <p>(0711) 352271</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Email</h3>
                                <p>diskominfoplg@gmail.com</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.4318508540714!2d104.74593591396783!3d-
                    .9775704406471397!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b76014bc1a597%3A0x465c801e542c7d27!2s
                    Dinas%20Komunikasi%20dan%20Informatika%20Kota%20Palembang!5e0!3m2!1sen!2sid!4v1672285609502!5m2!1sen!2sid" width="540" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Dinas Komunikasi dan Informatika Kota Palembang</span></strong>. All Rights Reserved
        </div>
    </div>
</footer><!-- End Footer -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script>
    $(document).ready(function() {
        $('#dtKunjungan').DataTable({
            "paging": true,
        });
        $('.dataTables_length').addClass('bs-select');
    });
</script>
</body>

</html>
<?= $this->endSection(''); ?>