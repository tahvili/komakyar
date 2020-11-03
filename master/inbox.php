<?php

    require_once('../includes/functions.php');
    require_once('../includes/actions/masterAction/masterCheck.php');
    require_once('../includes/actions/masterAction/masterContact.php');
    $pageTitle = "صندوق پیام";
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

                    <table id="myTable" class="table table-bordered text-center border-radius-komakyar-table table-hover">
                        <thead>
                            <tr class="table-primary">
                                <th scope="col">نام و نام خانوادگی</th>
                                <th scope="col">موضوع پیام</th>
                                <th scope="col">تاریخ ثبت</th>
                                <th scope="col">عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php masterContact(); ?>

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