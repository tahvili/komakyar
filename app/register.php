<?php 
require '../includes/functions.php';

if (isset($_SESSION['mailSession'])) {
    header('Location: panel.php');
}

get_header('transparent'); 
?>

<div class="row no-padding">
    <div class="col-md-6 blue full-height vertical-center">

        <form class="register" action="../includes/server/push.php" method="post">
            <input type="text" name="userRegister[name]" placeholder="نام" required>
            <input type="text" name="userRegister[lastname]" placeholder="نام خانوادگی" required>
            <input type="email" name="userRegister[email]" placeholder="آدرس ایمیل" required>
            <input type="text" name="userRegister[phonenumber]" placeholder="شماره موبایل" required>
            <input type="password" name="userRegister[password]" placeholder="کلمه عبور" required>
            <button name="submitUserRegister" type="submit">ثبت نام</button>
            <br>
            <span class="psw"><a href="login">کاربر هستید؟ وارد شوید</a></span>
        </form>

    </div>
    <div class="col-md-6 white map full-height vertical-center">
    </div>
</div>

<?php get_footer(); ?>