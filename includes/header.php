<?php
/**
 * The header for Komakyar.
 *
 * This is the template that displays all of the <head> section and everything up until <body>
 *
 * @package Komakyar
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!DOCTYPE html>
<html dir="rtl" lang="fa-IR" prefix="og: http://ogp.me/ns#">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php page_title(); ?>
<link rel='stylesheet' id='style-css' href='../assets/css/style.css' media='all' />
<link rel='stylesheet' id='bootstrap-css' href='../assets/css/bootstrap.min.css' media='all' />
<script src='../assets/js/jquery.min.js' id='jquery-js' type="text/javascript"></script>
<script src='../assets/js/bootstrap.min.js' id='bootstrap-js' type="text/javascript"></script>
<script src='../assets/js/sweetalert2.js' id='sweetalert2-js' type="text/javascript"></script>
</head>

<body itemtype='https://schema.org/WebPage' itemscope='itemscope' class="rtl page">

<header class="site-header navbar navbar-expand-lg align-items-center w-100 z-index-10 navbar-light">
<div class="position-relative container-fluid">
<div class="ml-auto maxed-out">
<div class="menu-mix">
<a href="/" class="navbar-brand logo mt-3 mt-lg-0 ml-lg-4 d-block d-lg-inline-block"><img src="../assets/img/logo.svg" class="" alt="Komakyar Logo"></a>
<?php menu(); ?>
</div>
</div>
<div class="mr-auto">
<?php main_sponsor(); ?>
<a class="clientarea" href="../portal"><img src="../assets/img/user.svg" class="client-area" alt="Client Area"></a>
</div>
</div>

</header>
<main>