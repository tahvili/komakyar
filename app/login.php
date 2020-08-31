<?php 
require '../includes/functions.php';
get_header('transparent'); ?>

<div class="row no-padding">
<div class="col-md-6 blue full-height vertical-center">

<form class="login" action="" method="post">

    <input type="email" placeholder="ایمیل پست الکترونیکی" required>
    <input type="password" placeholder="کلمه عبور" required>
    <button type="submit">ورود به سایت</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> مرا به خاطر بسپار
    </label>
    <span class="psw"><a href="#">فراموشی رمز عبور</a></span>
</form>
        

</div>
<div class="col-md-6 white map full-height vertical-center">
</div>
</div>

<?php get_footer(); ?>