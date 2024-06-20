<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard | Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('/assets/img/logo-kominfo.png'); ?>" rel="icon">
    <link href="<?= base_url('img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,
    800&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('/assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('/assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('/assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('/assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('/assets/vendor/remixicon/remixicon.css" rel="stylesheet'); ?>">
    <link href="<?= base_url('/assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('../assets/css/admin-style.css'); ?>" rel="stylesheet">

    <!-- Bootstrap DataTables CSS -->
    <!-- Jquery -->
    <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- Jquery DataTables -->
    <script type="text/javascript" language="javascript" src="http:////cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap dataTables Javascript -->
    <script type="text/javascript" language="javascript" src="http://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js">
    </script>
</head>

<body>
    <?= $this->include('admin/layout/navbar'); ?>
    <?= $this->include('admin/layout/sidebar'); ?>
    <?= $this->renderSection('content'); ?>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Dinas Komunikasi dan Informatika Kota Palembang</span></strong><span>.
                All Rights Reserved</span>
        </div>

    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('/assets/vendor/apexcharts/apexcharts.min.js'); ?>"></script>
    <script src="<?= base_url('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('/assets/vendor/chart.js/chart.umd.js'); ?>"></script>
    <script src="<?= base_url('/assets/vendor/echarts/echarts.min.js'); ?>"></script>
    <script src="<?= base_url('/assets/vendor/quill/quill.min.js'); ?>"></script>
    <script src="<?= base_url('/assets/vendor/simple-datatables/simple-datatables.js'); ?>"></script>
    <script src="<?= base_url('/assets/vendor/tinymce/tinymce.min.js'); ?>"></script>
    <script src="<?= base_url('/assets/vendor/php-email-form/validate.js'); ?>"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('/assets/js/admin-main.js'); ?>"></script>
    <script>
        $(document).ready(function() {
            $('#dtKunjungan').DataTable({
                "paging": true
            });
            $('.dataTables_length').addClass('bs-select');
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#dtInstansi').DataTable({
                "paging": true
            });
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#dtMaksud').DataTable({
                "paging": true
            });
            $('.dataTables_length').addClass('bs-select');
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#dtKritikSaran').DataTable({
                "paging": true
            });
            $('.dataTables_length').addClass('bs-select');
        });
    </script>

</body>

</html>