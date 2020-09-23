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
        <div class="box" style="margin-bottom:60px;">
            <div class="row" style="padding:15px;padding-left:0px;">
                <div class="col-md-6">
                    <h3>آگهی های من</h3>
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-4" style="text-align:left;">
                    <a href='./add'>ثبت آگهی رایگان</a>

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

                    <?php showUserAds(); ?>

                </tbody>
            </table>
        </div>

    </div>


    <div class="col-md-1"></div>
</div>

<?php get_footer(); ?>