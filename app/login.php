<?php 
require '../includes/functions.php';
get_header('transparent'); ?>

<div class="row no-padding">
<div class="col-md-6 blue full-height vertical-center">

<form class="login" action="" method="post">

    <input type="email" placeholder="ایمیل پست الکترونیکی" required>
    <input type="password" placeholder="کلمه عبور" required>
    <label class="checkoxContainer">
      <input type="checkbox" checked="checked" name="remember"> مرا به خاطر بسپار
      <span class="checkmark"></span>
    </label>
    <button type="submit">ورود به سایت</button>
    <br>
    <span class="psw"><a href="reset">فراموشی رمز عبور</a> <a href="register">| ثبت نام</a></span>
</form>
        

</div>
<div class="col-md-6 white map full-height vertical-center">
</div>
</div>

<?php get_footer(); ?>