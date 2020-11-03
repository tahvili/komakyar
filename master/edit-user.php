<?php

    require_once('../includes/functions.php');
    require_once('../includes/actions/masterAction/masterCheck.php');
    $pageTitle = "ویرایش کاربر";
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
                    <div class="page-head-title col-lg-6 col-sm-12">
                        <h1 class="lh-inherit"><?php echo $pageTitle; ?></h1>
                    </div>
                    <div class="page-head-btn col-lg-6 col-sm-12 text-left">
                    <div class="btn-group d-ltr">
                    <a href="show-user.php?userId=<?php echo $_GET['editUserId']; ?>"
                            class="btn btn-komakyar-sm">بازگشت</a>
                            <a href="edit-user.php?editUserId=<?php echo $_GET['editUserId'];?>&activeUserId=<?php echo $_GET['editUserId'];?>"
                                class="btn btn-success btn-border-radius">فعال سازی</a>

                            <a href="edit-user.php?editUserId=<?php echo $_GET['editUserId'];?>&suspendedUserId=<?php echo $_GET['editUserId'];?>"
                                class="btn btn-danger btn-border-radius">مسدود کردن</a>

                        </div>




                    </div>
                </div>
                <div class="page-content">
                    <form action="" method="post">
                        <ul class="list-group p-0 mb-4">
                            <li class="list-group-item">
                                <b>تاریخ ثبت نام:</b>
                                <span>2020-09-25 16:07:33 </span>
                            </li>
                            <li class="list-group-item">
                                <b>وضعیت حساب کاربری:</b>
                                <span>فعال</span>
                            </li>
                            <li class="list-group-item">
                                <b class="d-block mb-2">نام:</b>
                                <span>
                                    <input class="form-control" type="text" value="محمد" name="">
                                </span>
                            </li>
                            <li class="list-group-item">
                                <b class="d-block mb-2">نام خانوادگی:</b>
                                <span>
                                    <input class="form-control" type="text" value="جوان صفاری" name="">
                                </span> </li>
                            <li class="list-group-item">
                                <b class="d-block mb-2">آدرس ایمیل:</b>
                                <span>
                                    <input class="form-control" type="text" value="info@mohammad.com" name="">
                                </span> </li>
                            <li class="list-group-item">
                                <b class="d-block mb-2">شماره تماس:</b>
                                <span>
                                    <input class="form-control" type="text" value="+1 654 127" name="">
                                </span> </li>

                        </ul>
                        <div class="form-group m-0 text-left">
                            <button type="submit" name="" class="btn btn-komakyar">ثبت تغیرات</button>
                        </div>
                    </form>



                </div>
            </div>
        </div>

    </div>
</div>

<?php 
    get_footer();
?>