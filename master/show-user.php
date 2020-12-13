<?php

    require_once('../includes/functions.php');
    require_once('../includes/actions/masterAction/masterCheck.php');
    require_once('../includes/actions/masterAction/masterShowUser.php');
    $pageTitle = "نمایش کاربر";
    get_header($pageTitle);
    $queryRowqueryUserInfo = masterShowUser($_GET['userId']);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-sm-12">
            <div class="page user-panel">
                <?php require_once('../includes/sections/masterMenu.php'); ?>
            </div>
        </div>

        <div class="col-lg-9 col-sm-12">
            <div class="page mb-4">
                <div class="page-head row">
                    <div class="page-head-title col-lg-7 col-sm-12">
                        <h1 class="lh-inherit"><?php echo $pageTitle; ?></h1>
                    </div>
                    <div class="page-head-btn col-lg-5 col-sm-12 text-left">

                        <div class="btn-group d-ltr">
                            <a href="
                            <?php 
                            if(isset($_GET['adIdRef'])){
                                echo "show-ad.php?adId=" . $_GET['adIdRef'];
                            }else{
                                echo "users.php";
                            };
                            ?>
                            " class="btn btn-komakyar-sm">بازگشت</a>

                            <a href="edit-user.php?editUserId=<?php echo $_GET['userId'];?>"
                                class="btn btn-warning btn-border-radius">ویرایش کاربر</a>

                        </div>
                    </div>
                </div>
                <div class="page-content">
                    <ul class="list-group p-0">
                        <li class="list-group-item">
                            <b>وضعیت حساب کاربری:</b>
                            <span><?php 
                                    if($queryRowqueryUserInfo['userStatus'] == 1 ){
                                        echo "<th scope='row'>
                                        <span class='badge btn-komakyar-sm-b-radius badge-success p-2'>فعال</span></th>";
                                    
                                    }else {
                                        echo "<th scope='row'>
                                        <span class='badge btn-komakyar-sm-b-radius badge-danger p-2'>مسدود شده</span></th>";
                                    };
                             ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>تاریخ ثبت نام:</b>
                            <span><?php echo $queryRowqueryUserInfo['registerDate']; ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>نام:</b>
                            <span><?php echo $queryRowqueryUserInfo['name']; ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>نام خانوادگی:</b>
                            <span><?php echo $queryRowqueryUserInfo['lastName']; ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>آدرس ایمیل:</b>
                            <span><?php echo $queryRowqueryUserInfo['email']; ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>شماره تماس:</b>
                            <span><?php echo $queryRowqueryUserInfo['phone']; ?></span>
                        </li>

                    </ul>

                </div>
            </div>
            <div class="page">
                <div class="page-head row">
                    <div class="page-head-title col-lg-8 col-sm-12">
                        <h2 class="h1 lh-inherit">آگهی های کاربر</h2>
                    </div>
                    <div class="page-head-btn col-lg-4 col-sm-12 text-left">
                    </div>
                </div>
                <div class="page-content">
                    <table id="myTable"
                        class="table table-bordered text-center border-radius-komakyar-table table-hover">
                        <thead>
                            <tr class="table-primary">
                                <th scope="col">شناسه آگهی</th>
                                <th scope="col">عنوان آگهی</th>
                                <th scope="col">تاریخ ثبت</th>
                                <th scope="col">وضعیت</th>
                                <th scope="col">عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
<?php masterShowUserAds($_GET['userId']); ?>
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