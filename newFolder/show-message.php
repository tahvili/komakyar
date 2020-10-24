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
                <div class="col-md-6">
                    <h5><?php echo "کد پیام " . $_GET['messageId']?></h5>
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-4" style="text-align:left;">
                    <a href='./inbox'>برگشت</a>

                </div>

            </div>

            <?php
            
                $showCode = $_GET['messageId'];
                $dbConn = dbConnection();
                $queryShowCode = "SELECT * FROM contact WHERE id = '$showCode' ";
                $queryResShowCode = mysqli_query($dbConn, $queryShowCode);
                
                while($queryRowShowCode = mysqli_fetch_array($queryResShowCode)) { 
                    ?>

                <?php message($queryRowShowCode['fullName'], $queryRowShowCode['website'], $queryRowShowCode['phoneNumber'], $queryRowShowCode['email'], $queryRowShowCode['subject'], $queryRowShowCode['textMessage'], $queryRowShowCode['date']); ?>

                   <?php 
                   
                };
                
           
            
            
            
            ?>




        </div>

    </div>


    <div class="col-md-1"></div>
</div>

<?php get_footer(); ?>