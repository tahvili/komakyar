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
                    <h3>آگهی ها</h3>
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-4" style="text-align:left;">

                </div>

            </div>

            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">شناسه آگهی</th>
                        <th scope="col">عنوان آگهی</th>
                        <th scope="col">تاریخ ثبت</th>
                        <th scope="col">وضعیت</th>
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