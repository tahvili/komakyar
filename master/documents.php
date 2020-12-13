<?php

    require_once('../includes/functions.php');
    require_once('../includes/actions/masterAction/masterCheck.php');
    $pageTitle = "مستندات";
    get_header($pageTitle); 
?>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-sm-12">
            <div class="page user-panel">
                <?php require_once('../includes/sections/masterMenu.php'); ?>
            </div>
        </div>

        <div class="col-lg-9 col-sm-12">
            <div class="page">
                <div class="page-head row">
                    <div class="page-head-title col-lg-8 col-sm-12">
                        <h1 class="lh-inherit"><?php echo $pageTitle; ?></h1>
                    </div>
                    <div class="page-head-btn col-lg-4 col-sm-12 text-left">
                    </div>
                </div>
                <div class="page-content">

                    <table id="myTable"
                        class="table table-bordered text-center border-radius-komakyar-table table-hover">
                        <thead>
                            <tr class="table-primary">
                                <th scope="col">کد خطا</th>
                                <th scope="col">توضحیات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>10001</th>
                                <th>ورود به حساب کاربری با موفقیت انجام شد.</tr>
                            </tr>
                            <tr>
                                <th>10002</th>
                                <th>آدرس ایمیل یا کلمه عبور جهت ورد به حساب کاربری اشتباه است.</tr>
                            </tr>
                            <tr>
                                <th>10003</th>
                                <th>حساب کاربری مسدود میباشد.</tr>
                            </tr>
                            <tr>
                                <th>10004</th>
                                <th>حساب کاربری یافت نشد.</tr>
                            </tr>
                          
                        </tbody>
                    </table>


                </div>
            </div>
        </div>

    </div>
</div>

<?php 
    get_footer();
?>