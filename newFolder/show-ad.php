<?php 
require '../includes/functions.php';
if (!isset($_SESSION['mailSession'])) {
    header('Location: login.php');
}
get_header(''); ?>

<div class="row no-padding">
    <div class="col-md-1"></div>

    <div class="col-md-3">
        <div class="user-area">
            <?php get_control(); ?>
        </div>

    </div>
    <div class="col-md-7">
        <div class="box">
            <div class="row" style="padding:15px;padding-left:0px;">
                <div class="col-md-4">
                    <h5><?php echo "آگهی کد " . $_GET['adCode']?></h5>
                </div>
                <div class="col-md-8" style="text-align:left;">
                    <a href='#'>ثبت آگهی</a>
                    <a href='#'>برداشت آگهی</a>
                    <a href='#'>خطا در آگهی</a>
                    <a href='./ads'>برگشت</a>
                </div>

            </div>

            <?php
            
                $showAdCode = $_GET['adCode'];
                $dbConn = dbConnection();
                $queryShowAdCode = "SELECT * FROM ads WHERE adCode = '$showAdCode' ";
                $queryResShowAdCode = mysqli_query($dbConn, $queryShowAdCode);
                
                while($queryRowShowAdCode = mysqli_fetch_array($queryResShowAdCode)) { 
                    ?>
                <div style="direction: ltr;font-size: 14px;display: inline-block;text-align: left;margin-bottom: 20px;margin-top: -15px;background: #f1f1f1;padding: 12px 20px 12px 20px;border-radius: 50px;"><?php echo $queryRowShowAdCode['adCategory']?></div>
                <?php view($queryRowShowAdCode['bussinesName'], $queryRowShowAdCode['adTitle'], $queryRowShowAdCode['adText'], $queryRowShowAdCode['phoneNumber'], $queryRowShowAdCode['address'], $queryRowShowAdCode['instagram'], $queryRowShowAdCode['facebook'], $queryRowShowAdCode['website']); ?>

                   <?php 
                   
                };
            
            ?>

        </div>

    </div>


    <div class="col-md-1"></div>
</div>

<?php get_footer(); ?>