<?php

    require_once('../includes/functions.php');
    require_once('../includes/actions/masterAction/masterCheck.php');
    require_once('../includes/actions/masterAction/masterShowAdd.php');
    $pageTitle = " آگهی " . $_GET['adId'] ;
    get_header($pageTitle);
    $queryRowqueryAdId = masterShowAdd($_GET['adId']);
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
                    <div class="page-head-title"></div>
                    <div class=" col-lg-4 col-sm-12">
                        <h1 class="lh-inherit"><?php echo $pageTitle; ?></h1>
                    </div>
                    <div class="page-head-btn col-lg-8 col-sm-12 text-left">
                        <div class="btn-group d-ltr">
                            <?php
                            if(isset($_GET['userId'])) {
                                echo "<a href='show-user.php?userId=". $_GET['userId'] . "' class='btn btn-komakyar-sm'>بازگشت</a>";
                            }
                            else {
                                {
                                echo "<a href='ads.php' class='btn btn-komakyar-sm'>بازگشت</a>";
                            }
                            }
                        ?>
                            <a href="show-user.php?userId=<?php echo $queryRowqueryAdId['userId'];?>&adIdRef=<?php echo $_GET['adId'];?>"
                                class="btn btn-info btn-komakyar-sm-b-radius">نمایش کاربر</a>

                            <a href="show-ad.php?adId=<?php echo $_GET['adId'];?>&adStatus=2 "
                                class="btn btn-danger btn-komakyar-sm-b-radius">رد آگهی</a>
                            <a href="show-ad.php?adId=<?php echo $_GET['adId'];?>&adStatus=1 "
                                class="btn btn-success btn-komakyar-sm-b-radius">تائید آگهی</a>
                            <?php 

if(isset($_GET['adStatus']) && $_GET['adStatus']==1 ){
    AdApproval();

}
elseif(isset($_GET['adStatus']) && $_GET['adStatus']==2){
    AdReject();
};


?>


                        </div>
                    </div>
                </div>
                <div class="page-content">
                    <ul class="list-group p-0">
                        <li class="list-group-item">
                            <b>وضعیت آگهی:</b>
                            <span><?php 
                                    if($queryRowqueryAdId['adStatus'] == 1 ){
                                        echo "<th scope='row'>
                                        <span class='badge btn-komakyar-sm-b-radius badge-warning p-2'>در حال بررسی</span></th>";
                                    
                                    }elseif($queryRowqueryAdId['adStatus'] == 2){
                                        echo "<th scope='row'>
                                        <span class='badge btn-komakyar-sm-b-radius badge-success p-2'>تائید شده</span></th>";
                                    }else {
                                        echo "<th scope='row'>
                                        <span class='badge btn-komakyar-sm-b-radius badge-danger p-2'>رد شده</span></th>";
                                    };
                             ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>تاریخ ثبت:</b>
                            <span><?php echo $queryRowqueryAdId['adDate']; ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>کاربر ثبت کننده:</b>
                            <span><?php masterShowAddUserEmail($queryRowqueryAdId['userId']);?></span>
                        </li>
                        <li class="list-group-item">
                            <b>نام کسب و کار: </b>
                            <span><?php echo $queryRowqueryAdId['bussinesName']; ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>عنوان آگهی:</b>
                            <span><?php echo $queryRowqueryAdId['adTitle']; ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>متن آگهی: </b>
                            <span><?php echo $queryRowqueryAdId['adText']; ?></span>

                        </li>
                        <li class="list-group-item">
                            <b>شماره تماس:</b>
                            <span><?php echo $queryRowqueryAdId['adPhone']; ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>استان- شهر:</b>
                            <span><?php echo $queryRowqueryAdId['adProvince'] . " - " . $queryRowqueryAdId['adCity']; ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>آدرس: </b>
                            <span><?php echo $queryRowqueryAdId['adAddress']; ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>کد پستی: </b>
                            <span><?php echo $queryRowqueryAdId['postcode']; ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>آدرس ایمیل:</b>
                            <span><?php echo $queryRowqueryAdId['adEmail']; ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>آدرس وبسایت:</b>
                            <span><?php echo $queryRowqueryAdId['adWebsite']; ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>فیسبوک:</b>
                            <span><?php echo $queryRowqueryAdId['adFacebook']; ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>اینستاگرام:</b>
                            <span><?php echo $queryRowqueryAdId['adInstagram']; ?></span>
                        </li>
                        <li class="list-group-item">
                            <b>تلگرام:</b>
                            <span><?php echo $queryRowqueryAdId['adTelegram']; ?></span>
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