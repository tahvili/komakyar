<?php

    require_once('includes/functions.php');
    $pageTitle = "راهنمای مشاغل ایرانیان کانادا";
    get_header($pageTitle);
    
?>
<link rel="stylesheet" href='http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/css/transparent.css'>

<div class="container-fluid">
    <div class="row full-height">
        <div class="col-lg-6 community">
            <div class="community-content">
                <h1>جامعه زیبا برای ایرانیان کانادا</h1>
                <p>برای نمایش آگهی ها، استان خود را انتخاب کنید.</p>
            </div>
        </div>
        <div class="col-lg-6">
            <object data="assets/img/canada.svg" class="map" type="image/svg+xml" __idm_frm__="405"></object>
        </div>
    </div>
</div>
<?php 
    get_footer();
?>