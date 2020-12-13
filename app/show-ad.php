<?php

    require_once('../includes/functions.php');
    require_once('../includes/actions/appAction/userCheck.php');
    require_once('../includes/actions/appAction/showAd.php');
    $pageTitle = "نمایش آگهی";
    get_header($pageTitle);
    
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
                    <div class="page-head-title"></div>
                    <div class=" col-lg-4 col-sm-12">
                        <h1 class="lh-inherit"><?php echo $pageTitle; ?></h1>
                    </div>
                    <div class="page-head-btn col-lg-8 col-sm-12 text-left">
                        <a href="index.php" class="btn btn-komakyar-sm">بازگشت</a>

                    </div>
                </div>
                <div class="page-content">
                    <?php 
                    ShowAd($_GET['adId']);
                    ?>

<div class="row">
    <div class="col-6">
    <ul class="list-group p-0">
                        <li class="list-group-item">
                            <b>وضعیت آگهی:</b>
                            <?php  
                            if($queryRowShowAd['adStatus'] == 1){
                                echo "<span class='badge btn-komakyar-sm-b-radius badge-warning p-2'>در حال بررسی</span>";
                            }elseif($queryRowShowAd['adStatus'] == 2){
                                echo "<span class='badge btn-komakyar-sm-b-radius badge-success p-2'>تائید شده</span>";
                            }else{
                                    echo "<span class='badge btn-komakyar-sm-b-radius badge-danger p-2'>رد شده</span>";
                             };
                            ?>
                        </li>
                        <li class="list-group-item">
                            <b>کد آگهی:</b>
                            <span><?php  echo $queryRowShowAd['adId'];?></span>
                        </li>
                        <li class="list-group-item">
                            <b>تاریخ ثبت:</b>
                            <span><?php  echo $queryRowShowAd['adDate'];?></span>
                        </li>
                        <li class="list-group-item">
                            <b>نام کسب و کار: </b>
                            <span><?php  echo $queryRowShowAd['bussinesName'];?></span>
                        </li>
                        <li class="list-group-item">
                            <b>عنوان آگهی:</b>
                            <span><?php  echo $queryRowShowAd['adTitle'];?></span>
                        </li>
                        <li class="list-group-item">
                            <b>متن آگهی: </b>
                            <span><?php  echo $queryRowShowAd['adText'];?></span>
                        </li>
                        <li class="list-group-item">
                            <b>شماره تماس:</b>
                            <span><?php  echo $queryRowShowAd['adPhone'];?></span>
                        </li>
                        <li class="list-group-item">
                            <b>دسته بندی:</b>
                            <span><?php  echo $queryRowShowAd['adCategory'];?></span>
                        </li>
                        
                    </ul>
    </div>
    <div class="col-6">
    <ul class="list-group p-0">
                       
    <li class="list-group-item">
                            <b>استان- شهر:</b>
                            <span><?php  echo $queryRowShowAd['adProvince'] . " - " . $queryRowShowAd['adCity'];?></span>
                        </li>
                        <li class="list-group-item">
                            <b>آدرس: </b>
                            <span><?php  echo $queryRowShowAd['adAddress'];?></span>
                        </li>
                        <li class="list-group-item">
                            <b>کد پستی: </b>
                            <span><?php  echo $queryRowShowAd['postcode'];?></span>
                        </li>
                        <li class="list-group-item">
                            <b>آدرس ایمیل:</b>
                            <span><?php  echo $queryRowShowAd['adEmail'];?></span>
                        </li>
                        <li class="list-group-item">
                            <b>آدرس وبسایت:</b>
                            <span><?php  echo $queryRowShowAd['adWebsite'];?></span>
                        </li>
                        <li class="list-group-item">
                            <b>فیسبوک:</b>
                            <span><?php  echo $queryRowShowAd['adFacebook'];?></span>
                        </li>
                        <li class="list-group-item">
                            <b>اینستاگرام:</b>
                            <span><?php  echo $queryRowShowAd['adInstagram'];?></span>
                        </li>
                        <li class="list-group-item">
                            <b>تلگرام:</b>
                            <span><?php  echo $queryRowShowAd['adTelegram'];?></span>
                        </li>
                    </ul>
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