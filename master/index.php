<?php

    require_once('../includes/functions.php');
    require_once('../includes/actions/masterAction/masterCheck.php');
    require_once('../includes/actions/masterAction/masterReports.php');
    $pageTitle = "داشبورد";
    get_header($pageTitle);

    if(@$_GET['login'] == "success"){
        alert("شما با موفقیت وارد حساب کاربری خود شدید.", "success");
        header('Location:index.php');
    };
    $reportDashboard = reportDashboard();
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

                    <div class="master-card">
                        <div class="master-card-header">
                            <div class="row">
                                <div class="col-10">
                                    <h3>آمار</h3>
                                    <span>آمار کلی پلتفرم کمک‌یار</span>
                                </div>
                                <div class="col-2">
                                    <div class="master-icon float-left">
                                    <i class="far fa-smile"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="master-card-body">
                            <div class="row">
                            <div class="col-3">
                                    <div class="master-card-item">
                                        <span><?php echo $reportDashboard['0']; ?></span>
                                        <h4>آگهی های درحال بررسی</h4>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="master-card-item">
                                    <span><?php echo $reportDashboard['1']; ?></span>
                                        <h4>آگهی های تائید شده</h4>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="master-card-item">
                                    <span><?php echo $reportDashboard['2']; ?></span>
                                        <h4>آگهی های رد شده</h4>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="master-card-item">
                                    <span><?php echo $reportDashboard['3']; ?></span>
                                        <h4>کل کاربران</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php 
    get_footer();
?>