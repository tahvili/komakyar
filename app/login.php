<?php 
require '../includes/functions.php';

if (isset($_SESSION['mailSession'])) {
    header('Location: panel.php');
}

get_header('transparent'); 
?>

<div class="row no-padding">
    <div class="col-md-6 blue full-height vertical-center">
    
        <form class="login" action="../includes/server/pull.php" method="post">
        <?php error(); ?>
            <input type="email" name="emailLogin" placeholder="آدرس ایمیل" required>
            <input type="password" name="passLogin" placeholder="کلمه عبور" required>
            <button name="submitUserLogin" type="submit">ورود به سایت</button>
            <br>
            <span class="psw"><a href="reset">فراموشی رمز عبور</a> <a href="register">| ثبت نام</a></span>
        </form>


    </div>
    <div class="col-md-6 white map full-height vertical-center">
    </div>
</div>

<?php get_footer(); ?>