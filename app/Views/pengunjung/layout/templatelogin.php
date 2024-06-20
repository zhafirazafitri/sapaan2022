<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SAPAAN | Dinas Komunikasi dan Informatika Kota Palembang</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('/assets/img/logo-kominfo.png'); ?>" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,800&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('/assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('/assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('/assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('/assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('/assets/vendor/remixicon/remixicon.css" rel="stylesheet'); ?>">
    <link href="<?= base_url('/assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('/assets/css/style.css'); ?>" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <!-- Bootstrap DataTables CSS -->
    <!-- Jquery -->
    <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- Jquery DataTables -->
    <script type="text/javascript" language="javascript" src="http:////cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js">
    </script>
    <!-- Bootstrap dataTables Javascript -->
    <script type="text/javascript" language="javascript" src="http://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js">
    </script>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="<?= base_url(''); ?>" class="logo d-flex align-items-center">
                <img src="<?= base_url('/assets/img/logo-plg.png'); ?>" alt="">
                <img src="<?= base_url('/assets/img/logo-kominfo.png'); ?>" class="logo-kominfo'); ?>" alt="">
                <span>SAPAAN</span>
            </a>
        </div>
    </header><!-- End Header -->

    <?= $this->renderSection('content'); ?>