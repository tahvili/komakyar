<?php 
require '../includes/functions.php';
if (!isset($_SESSION['mailSession'])) {
    header('Location: login.php');
}
get_header(''); ?>

<div class="row no-padding">
    <div class="col-md-1"></div>

    <div class="col-md-3">
        <div class="user-area">
            <?php get_control(); ?>
        </div>

    </div>
    <div class="col-md-7">
        <div class="box">
            <div class="row" style="padding:15px;padding-left:0px;">
                <div class="col-md-6">
                    <h3>ثبت کاربر جدید</h3>
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-4" style="text-align:left;">

                </div>

            </div>

            <form class="create" action="" method="post"><br>
            <input type="text" name="userRegister[name]" placeholder="نام" required>
            <input type="text" name="userRegister[lastname]" placeholder="نام خانوادگی" required>
            <input type="email" name="userRegister[email]" placeholder="آدرس ایمیل" required>
            <input type="text" name="userRegister[phonenumber]" placeholder="شماره موبایل" required>
            <input type="password" name="userRegister[password]" placeholder="کلمه عبور" required>
            <button name="submitUserRegister" type="submit">ثبت</button>
        </form>

        </div>

    </div>


    <div class="col-md-1"></div>
</div>

<?php get_footer(); ?>