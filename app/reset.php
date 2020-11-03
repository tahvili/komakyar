<?php

    require_once('../includes/functions.php');
    $pageTitle = "فراموشی رمز عبور";
    get_header($pageTitle);
    
?>

<link rel="stylesheet" href='http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/css/transparent.css'>

<div class="container-fluid">
    <div class="row full-height">
        <div class="col-lg-6 bg-komakyar frm-login">
            <form class="mx-auto w-75" action="" method="post">
                <p> برای شروع بازیابی آدرس ایمیل خود را وارد نمایید.</p>
                <div class="form-group">
                    <input type="text" name="" class="form-control" placeholder="آدرس ایمیل">
                </div>
                <div class="form-group text-left">
                    <button type="submit" name="" class="btn btn-komakyar">ارسال</button>
                </div>

            </form>
            
        </div>
        <div class="col-lg-6 community-login">
            <div class="community-login-content">
                <h1><?php echo $pageTitle?></h1>
                <h2>کمک‌یار، جامعه زیبا برای ایرانیان کانادا</h2>
            </div>
        </div>
    </div>
</div>
<?php 
    get_footer();
?>