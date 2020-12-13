<?php

    require_once('../includes/functions.php');
    require_once('../includes/actions/masterAction/masterCheck.php');
    require_once('../includes/actions/masterAction/masterShowMessage.php');
    $pageTitle = "نمایش پیام";
    get_header($pageTitle);
    $queryRowShowMessage = masterShowMessage($_GET['messageId']);
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
                    <div class="page-head-title col-lg-5 col-sm-12">
                        <h1 class="lh-inherit"><?php echo $pageTitle; ?></h1>
                    </div>
                    <div class="page-head-btn col-lg-7 col-sm-12 text-left">
                    <a href="inbox.php" class="btn btn-komakyar-sm">بازگشت</a>

                    </div>
                </div>
                <div class="page-content">
                    <ul class="list-group p-0">
                        <li class="list-group-item">
                            <b>تاریخ ثبت:</b>
                            <span><?php echo $queryRowShowMessage['date'];?></span>
                        </li>
                        <li class="list-group-item">
                            <b>نام و نام خانوادگی: </b>
                            <span><?php echo $queryRowShowMessage['fullName'];?></span>
                        </li>
                        <li class="list-group-item">
                            <b>آدرس ایمیل:</b>
                            <span><?php echo $queryRowShowMessage['email'];?></span>
                        </li>
                        <li class="list-group-item">
                            <b>شماره تماس:</b>
                            <span><?php echo $queryRowShowMessage['phoneNumber'];?></span>
                        </li>
                        <li class="list-group-item">
                            <b>آدرس وبسایت:</b>
                            <span><?php echo $queryRowShowMessage['website'];?></span>
                        </li>
                        <li class="list-group-item">
                            <b>موضوع:</b>
                            <span><?php echo $queryRowShowMessage['subject'];?></span>
                        </li>
                        <li class="list-group-item">
                            <b>متن پیام:</b>
                            <p><?php echo $queryRowShowMessage['textMessage'];?></p>

                        </li>
                    </ul>

                </div>
            </div>
        </div>

    </div>
</div>

<?php 
    get_footer();
?>