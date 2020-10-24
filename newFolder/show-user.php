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
        <div class="box" style="margin-bottom:-30px;">
            <div class="row" style="padding:15px;padding-left:0px;">
                <div class="col-md-6">
                    <h5><?php echo "کد کاربر " . $_GET['userId']?></h5>
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-4" style="text-align:left;">
                    <a href='./users'>برگشت</a>

                </div>

            </div>

            <?php
            
                $showId = $_GET['userId'];
                $dbConn = dbConnection();
                $query = "SELECT * FROM users WHERE id = '$showId' ";
                $queryRes = mysqli_query($dbConn, $query);
                
                while($queryRowShow = mysqli_fetch_array($queryRes)) { 
                    ?>

                <?php client($queryRowShow['name'], $queryRowShow['lastName'], $queryRowShow['email'], $queryRowShow['phoneNumber'], $queryRowShow['registerDate']); ?>

                   <?php 
                   
                };
                
           
            
            
            
            ?>




        </div>
        <div class="box" style="margin-bottom:60px;">
                    <div class="row" style="padding:15px;padding-left:0px;">
                        <div class="col-md-6">
                            <h3>آگهی های کربر</h3>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th scope="col">شناسه آگهی</th>
                                <th scope="col">عنوان آگهی</th>
                                <th scope="col">تاریخ ثبت</th>
                                <th scope="col">وضعیت</th>
                                <th scope="col">عملیات</th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php showCustomUserAds($showId); ?>

                        </tbody>
                    </table>
                </div>
    </div>


    <div class="col-md-1"></div>
</div>

<?php get_footer(); ?>