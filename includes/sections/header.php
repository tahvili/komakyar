<!DOCTYPE html>
<html lang="fa">

<head>
    <title><?php echo  $pageTitle . " - کمک ‌یار"; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/css/bootstrap.min.css'>
    <link rel="stylesheet" href='http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/css/style.css'>
    <link rel="stylesheet" href='http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/css/responsive.css'>
    <link rel="stylesheet" href='http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/css/chart.min.css'>
    <script src='http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/js/jquery.min.js'></script>
    <script src='http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/js/bootstrap.min.js'></script>
    <script src='http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/js/sweetalert2.js'></script>
    <script src='http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/js/chart.min.js'></script>
    <script src="https://kit.fontawesome.com/214c0d4d85.js" crossorigin="anonymous"></script>

</head>

<body>

    <header class="navbar navbar-expand-lg navbar-light site-header">
        <a class="navbar-brand" href="http://localhost/">
        <img src='http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/img/logo.svg' class="logo" alt="Komakyar Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
<?php require_once('menu.php'); ?>

    </header>

    <body>
        <main>