<?php

    require_once('../includes/functions.php');
    $pageTitle = "ایجاد حساب کاربری";
    get_header($pageTitle);
    require_once('../includes/actions/appAction/userRegister.php');
    
?>

<link rel="stylesheet" href='http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/css/transparent.css'>

<div class="container-fluid">
    <div class="row full-height">
        <div class="col-lg-6 bg-komakyar frm-login">
            <form class="mx-auto w-75" action="" method="post">
            <div class="form-group">
                    <input type="text" name="userRegister[name]" class="form-control" placeholder="نام *">
                </div>
                <div class="form-group">
                    <input type="text" name="userRegister[lastName]" class="form-control" placeholder="نام خانوادگی *">
                </div>
                <div class="form-group">
                    <input type="email" name="userRegister[email]" class="form-control" placeholder="آدرس ایمیل *">
                </div>
                <div class="form-group">
                    <input type="text" name="userRegister[phone]" class="form-control" pattern="\d{3}\d{3}\d{4}" placeholder="شماره تلفن *">
                </div>
                <div class="form-group">
                    <input type="password" name="userRegister[password]" class="form-control" placeholder="کلمه عبور *">
                </div>
                <div class="form-group text-left">
                    <span class="frm-login-links">
                        <a href="login.php">حساب کاربری دارید؟ وارد شوید.</a>
                    </span>
                    <button type="submit" name="submit" class="btn btn-komakyar">ثبت نام</button>
                </div>

            </form>
            
            <?php
                if(isset($_POST['submit'])){
                    $userRegister = $_POST['userRegister'];
                    userRegister($userRegister['name'],$userRegister['lastName'],$userRegister['email'],$userRegister['phone'],$userRegister['password']);
                }
            ?>
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