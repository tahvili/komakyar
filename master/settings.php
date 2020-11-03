<?php

    require_once('../includes/functions.php');
    require_once('../includes/actions/masterAction/masterCheck.php');
    require_once('../includes/actions/masterAction/masterSettings.php');
    $pageTitle = "تنظیمات";
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
                <form action="" method="post">
                        <p>جهت تغیر رمز عبور خود میتوانید از فرم زیر استفاده کنید.</p>
                        <div class="form-group">
                            <input type="password" name="masterSettings[old]" class="form-control" placeholder="رمز عبور فعلی">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="password" name="masterSettings[new]" class="form-control" placeholder="رمز عبور جدید">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="password" name="masterSettings[reNew]" class="form-control" placeholder="تکرار رمز عبور جدید">
                            </div>
                        </div>
                        <div class="form-group text-left">
                            <button type="submit" name="submit" class="btn btn-komakyar">ثبت اطلاعات</button>
                        </div>
                    </form>
                    <?php
                if(isset($_POST['submit'])){
                    $masterSettings = $_POST['masterSettings'];
                    masterSettings($masterSettings['old'],$masterSettings['new'],$masterSettings['reNew']);
                };
            ?>
                </div>
            </div>
        </div>

    </div>
</div>

<?php 
    get_footer();
?>