<?php
    require_once('../includes/functions.php');
    require_once('../includes/actions/appAction/userCheck.php');
    require_once('../includes/actions/appAction/userAds.php');

    $pageTitle = "آگهی های من";
    get_header($pageTitle);
    
    if(@$_GET['login'] == "success"){
        alert("شما با موفقیت وارد حساب کاربری خود شدید.", "success");
        header('Location:index.php');
    };
    if(@$_GET['register'] == "success"){
        alert("ثبت نام شما با موفقیت انجام شد.", "success");
    };
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 mb-4">
            <div class="page">
                <?php require_once('../includes/sections/userMenu.php'); ?>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12 mb-4">
            <div class="page p-0">
                <img class="w-100" src="../assets/img/ads-1300X130.jpg" alt="">
            </div>
        </div>
        <div class="col-lg-12 col-sm-12">
            <div class="page">
                <div class="page-head row">
                    <div class="page-head-title col-lg-8 col-sm-12">
                        <h1 class="lh-inherit"><?php echo $pageTitle; ?></h1>
                    </div>
                    <div class="page-head-btn col-lg-4 col-sm-12 text-left">
                    </div>
                </div>
                <div class="page-content">
                    <table id="myTable" class="table table-bordered text-center border-radius-komakyar-table table-hover">
                        <thead>
                            <tr class="table-primary">
                                <th>شناسه آگهی</th>
                                <th>عنوان آگهی</th>
                                <th>زمان ثبت</th>
                                <th>وضعیت</th>
                                <th>عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php showUserAds($_SESSION["userEmail"]); ?>
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