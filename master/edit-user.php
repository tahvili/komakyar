<?php

    require_once('../includes/functions.php');
    require_once('../includes/actions/masterAction/masterCheck.php');
    require_once('../includes/actions/masterAction/masterEditUser.php');
    $pageTitle = "ویرایش کاربر";
    get_header($pageTitle);
    $queryRowqueryEditUser = masterEditUser($_GET['editUserId']);
    
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

                            <a href="edit-user.php?editUserId=<?php echo $_GET['editUserId'];?>&userStatus=0 "
                                class="btn btn-danger btn-komakyar-sm-b-radius">مسدود کردن</a>
                            <a href="edit-user.php?editUserId=<?php echo $_GET['editUserId'];?>&userStatus=1 "
                                class="btn btn-success btn-komakyar-sm-b-radius">فعال سازی</a>

                            <?php 
  
if(isset($_GET['userStatus']) && $_GET['userStatus']==1 ){
    activeUser();

}
elseif(isset($_GET['userStatus']) && $_GET['userStatus']==0 ){
    suspendUser();
};
?>

                        </div>




                    </div>
                </div>
                <div class="page-content">
                    <form action="" method="post">
                        <ul class="list-group p-0 mb-4">
                            <li class="list-group-item">
                                <b>وضعیت حساب کاربری:</b>
                                <span><?php 
                                    if($queryRowqueryEditUser['userStatus'] == 1 ){
                                        echo "<th scope='row'>
                                        <span class='badge btn-komakyar-sm-b-radius badge-success p-2'>فعال</span></th>";
                                    
                                    }else {
                                        echo "<th scope='row'>
                                        <span class='badge btn-komakyar-sm-b-radius badge-danger p-2'>مسدود شده</span></th>";
                                    };
                             ?></span> </li>
                            <li class="list-group-item">
                                <b>تاریخ ثبت نام:</b>
                                <span><?php echo $queryRowqueryEditUser['registerDate'];?></span>
                            </li>
                            <li class="list-group-item">
                                <b>آدرس ایمیل:</b>
                                <span><?php echo $queryRowqueryEditUser['email'];?></span>
                            </li>

                            <li class="list-group-item">
                                <b class="d-block mb-2">نام:</b>
                                <span>
                                    <input class="form-control" type="text"
                                        value="<?php echo $queryRowqueryEditUser['name']?>"
                                        name="masterEditUserInput[name]">
                                </span>
                            </li>
                            <li class="list-group-item">
                                <b class="d-block mb-2">نام خانوادگی:</b>
                                <span>
                                    <input class="form-control" type="text"
                                        value="<?php echo $queryRowqueryEditUser['lastName']?>"
                                        name="masterEditUserInput[lastName]">
                                </span> </li>

                            <li class="list-group-item">
                                <b class="d-block mb-2">شماره تماس:</b>
                                <span>
                                    <input class="form-control" type="text"
                                        value="<?php echo $queryRowqueryEditUser['phone']?>"
                                        name="masterEditUserInput[phone]"> </span> </li>

                        </ul>
                        <div class="form-group m-0 text-left mb-5">
                            <button type="submit" name="submit" class="btn btn-komakyar">ثبت تغیرات</button>
                        </div>
                    </form>
                    <?php
                if(isset($_POST['submit'])){
                    $masterEditUserInput = $_POST['masterEditUserInput'];
                    masterEditUserInput($masterEditUserInput['name'],$masterEditUserInput['lastName'],$masterEditUserInput['phone'],$_GET['editUserId']);
                };
            ?>

                    <form action="" method="post">
                        <ul class="list-group p-0 mb-4">

                            <li class="list-group-item">
                                <b class="d-block mb-2">کلمه عبور:</b>
                                <span>
                                    <input class="form-control" type="text"
                                        placeholder="در صورتی که نمیخواهید کلمه عبور را تغیر دهید این فیلد را خالی بگذارید."
                                        name="masterEditUserPassword"> </span> </li>

                        </ul>
                        <div class="form-group m-0 text-left">
                            <button type="submit" name="submitPassword" class="btn btn-komakyar">ویرایش کلمه
                                عبور</button>
                        </div>
                    </form>
                    <?php
                if(isset($_POST['submitPassword'])){
                    $masterEditUserPassword = $_POST['masterEditUserPassword'];
                    $masterEditUserPassword = md5($masterEditUserPassword);
                    masterEditUserPassword($masterEditUserPassword,$_GET['editUserId']);
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