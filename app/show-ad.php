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
            <?php $emailForGravatar =  getUserInformation("email"); echo gravatar($emailForGravatar); ?>
            <div class="profile-username"><?php echo getUserInformation("name") . " ". getUserInformation("lastName");?>
            </div>

            <form class="profile-change" action="" method="post">
                <input type="hidden" name="destroySession" value="1">
                <button name="submitUserLogin" type="submit">خروج</button>
            </form>


            <?php 
                $destroySession = filter_input(INPUT_POST, 'destroySession');
                if ($destroySession == 1) {
                    session_destroy();
                    header('Location: ../../app/login.php?logout=success');

                }    
            ?>


        </div>

    </div>
    <div class="col-md-7">
        <div class="box">
            <div class="row" style="padding:15px;padding-left:0px;">
                <div class="col-md-6">
                    <h3><?php echo "آگهی کد " . $_GET['adCode']?></h3>
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-4" style="text-align:left;">
                    <a href='./panel'>برگشت</a>

                </div>

            </div>

            <?php
            function showMyAd(){
                $showAdCode = $_GET['adCode'];
                $dbConn = dbConnection();
                $queryShowAdCode = "SELECT * FROM ads WHERE adCode = '$showAdCode' ";
                $queryResShowAdCode = mysqli_query($dbConn, $queryShowAdCode);
                
                while($queryRowShowAdCode = mysqli_fetch_array($queryResShowAdCode)) { 
                    var_dump($queryRowShowAdCode);
                }
                
            };
            showMyAd();
            
            
            
            ?>




        </div>

    </div>


    <div class="col-md-1"></div>
</div>

<?php get_footer(); ?>