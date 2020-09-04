<?php 
require $_SERVER['DOCUMENT_ROOT'] .'/includes/functions.php';
get_header(''); ?>

<div class="row no-padding">
    <div class="col-md-3"></div>
    <div class="col-md-6 box" style="margin-bottom:60px;">
    <form class="create" action="" method="post"><br>
            <input type="text" name="userRegister[name]" placeholder="نام" required>
            <input type="text" name="userRegister[lastname]" placeholder="نام خانوادگی" required>
            <input type="email" name="userRegister[email]" placeholder="آدرس ایمیل" required>
            <input type="text" name="userRegister[phonenumber]" placeholder="شماره موبایل" required>
            <input type="password" name="userRegister[password]" placeholder="کلمه عبور" required>
            <button name="submitUserRegister" type="submit">ثبت نام</button>
        </form>
    </div>
    <div class="col-md-3"></div>
</div>

<?php get_footer(); ?>