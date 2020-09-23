<?php 
require 'includes/functions.php';
get_header('transparent'); ?>

<div class="row no-padding">
    <div class="col-md-6 blue full-height community">
        <div style="background-image: linear-gradient(#1473e6, #1473e6, #1473e6, #1473e6de, transparent);padding-bottom:2em;">
        <h1>جامعه زیبا برای ایرانیان کانادا</h1>
        <p>برای شروع داستان، ایالت خود را انتخاب کنید.</p>
        <object class="map-mobile" data="./assets/img/canada.svg" type="image/svg+xml"></object>
    </div>
    </div>
    <div class="col-md-6 white map full-height vertical-center">

        <object class="map" data="./assets/img/canada.svg" type="image/svg+xml"></object>

    </div>
</div>

<?php get_footer(); ?>