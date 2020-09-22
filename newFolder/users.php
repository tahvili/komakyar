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
                    <h3>مدیریت کاربران</h3>
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-4" style="text-align:left;">
                    <a href='./newUser'>ثبت کاربر جدید</a>

                </div>

            </div>

            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">نام</th>
                        <th scope="col">نام خانوادگی</th>
                        <th scope="col">آدرس ایمیل</th>
                        <th scope="col">شماره موبایل</th>
                        <th scope="col">عملیات</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>-</<td>
                        <td>-</<td>
                        <td>-</<td>
                        <td>-</<td>
                        <td>-</<td>
                    </tr>

                    </tbod1y>
            </table>



        </div>

    </div>


    <div class="col-md-1"></div>
</div>

<?php get_footer(); ?>