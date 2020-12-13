<?php

    require_once('../includes/functions.php');
    require_once('../includes/actions/masterAction/masterCheck.php');
    require_once('../includes/actions/masterAction/masterLogs.php');
    $pageTitle = "لاگ سیستم";
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
                        <th scope="col">IP کاربر</th>
                        <th scope="col">آدرس ایمیل</th>
                        <th scope="col">ساعت و تاریخ رخداد</th>
                        <th scope="col">مرورگر</th>
                        <th scope="col">کشور</th>
                        <th scope="col">جزئیات</th>

                    </tr>
                        </thead>
                        <tbody>
<?php masterShowLogs();?>
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