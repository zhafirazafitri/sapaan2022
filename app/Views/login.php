<?= $this->extend('pengunjung/layout/templatelogin'); ?>
<?= $this->section('content'); ?>
<main id="main">
    <section class="login-page">
        <div class="login-box">
            <h2>Login</h2>
            <div class="border-center-2"></div>
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
            <?= form_open('adminkominfoplg/prosesLogin') ?>
            <?= csrf_field(); ?>
            <form>
                <div class="user-box mt-5">
                    <input type="text" class="form-control" name="username" id="username" required>
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input type="password" class="form-control" name="password" id="password" required>
                    <label>Password</label>
                </div>
                <div class="col d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary mt-3">Login</button>
                </div>
            </form>
            <? form_close(); ?>
        </div>
    </section>

</main><!-- End #main -->
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->

<script src="<?= base_url('/assets/vendor/purecounter/purecounter_vanilla.js') ?>"></script>
<script src="<?= base_url('/assets/vendor/aos/aos.js') ?>"></script>
<script src="<?= base_url('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('/assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
<script src="<?= base_url('/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
<script src="<?= base_url('/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
<script src="<?= base_url('/vendor/php-email-form/validate.js'); ?>"></script>

<!-- Template Main JS File -->
<script src="<?= base_url('/js/main.js'); ?>"></script>
<script>
    $(document).ready(function() {
        $('.tableExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>

</body>

</html>
<?= $this->endSection(''); ?>