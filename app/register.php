<?php 
require '../includes/functions.php';
get_header('transparent'); ?>

<div class="row no-padding">
<div class="col-md-6 blue full-height vertical-center">

<form class="register" action="" method="post">

    <input type="text" placeholder="نام و نام خانوادگی" required>
    <input type="email" placeholder="ایمیل پست الکترونیکی" required>
    <input type="password" placeholder="کلمه عبور" required>
    <button type="submit">ثبت نام</button>
    <span class="psw"><a href="#">کاربر هستید؟ وارد شوید</a></span>
</form>
        

</div>
<div class="col-md-6 white map full-height vertical-center">
</div>
</div>

<?php get_footer(); ?>