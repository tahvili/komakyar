<?php
    require_once('../includes/functions.php');
    $pageTitle = "ورود به حساب کاربری";
    get_header($pageTitle);
    require_once('../includes/actions/appAction/userLogin.php');

    if(@$_GET['login'] == "required"){
        alert("برای دسترسی باید ابتدا وارد حساب کاربری خود شوید.", "warning");
    };
    if(isset($_SESSION["userEmail"])){
        header('Location: index.php');
    };
    
?>

<link rel="stylesheet" href='http://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/css/transparent.css'>

<div class="container-fluid">
    <div class="row full-height">
        <div class="col-lg-6 bg-komakyar frm-login">
            <form class="mx-auto w-75" action="" method="post">
                
                <div class="form-group">
                    <input type="text" name="userLogin[email]" class="form-control" placeholder="آدرس ایمیل">
                </div>
                <div class="form-group">
                    <input type="password" name="userLogin[password]" class="form-control" placeholder="رمز عبور">
                </div>
                <div class="form-group text-left">
                    <span class="frm-login-links">
                        <a href="reset.php">فراموشی رمز عبور</a>
                        <span>|</span>
                        <a href="register.php">ثبت نام</a>
                    </span>
                    <button type="submit" name="submit" class="btn btn-komakyar">ورود</button>
                </div>

            </form>
            <?php
                if(isset($_POST['submit'])){
                    $userLogin = $_POST['userLogin'];
                    userLogin($userLogin['email'],$userLogin['password']);
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