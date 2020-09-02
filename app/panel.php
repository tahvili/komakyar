<?php 
require '../includes/functions.php';
get_header(''); ?>

<div class="row no-padding">
<div class="col-md-2"></div>
<div class="col-md-2">
<div class="user-area">
<img src="../up/profile.png" class="profile-picture">
<div class="profile-username">محمد تحویلی</div>
<form class="profile-change" action="../includes/server/pull.php" method="post">
<input type="text" name="userRegister[name]" placeholder="نام" required>
    <input type="text" name="userRegister[lastname]" placeholder="نام خانوادگی" required>
    <input type="password" name="passLogin" placeholder="کلمه عبور" required>
    <button  name="submitUserLogin" type="submit">ثبت تغییرات</button>
</form>
</div>
</div>
<div class="col-md-6">
    <div class="box">
    <div class="row" style="padding:15px;padding-left:0px;">
    <div class="col-md-6">
        <h3>آگهی رایگان</h3>
    </div>
    <div class="col-md-2">
    </div>
    <div class="col-md-4" style="text-align:left;">
    <a href='./add'>ثبت آگهی رایگان</a>
    </div>
    </div>

    <?php posted("5", "نام شخص یا موسسه مورد نظر", "2000", "30", "delete"); ?>
    <?php posted("5", "نام شخص یا موسسه مورد نظر", "2000", "30", "delete"); ?>
    <?php posted("5", "نام شخص یا موسسه مورد نظر", "2000", "30", "delete"); ?>
    <?php posted("5", "نام شخص یا موسسه مورد نظر", "2000", "30", "delete"); ?>

    </div>


    <div class="box" style="margin-top:50px !important;margin-bottom:30px;">
    <div class="row" style="padding:15px;padding-left:0px;">
    <div class="col-md-6">
        <h3>آگهی پولی</h3>
    </div>
    <div class="col-md-2">
    </div>
    <div class="col-md-4" style="text-align:left;">
    <a  href='#'>ثبت آگهی پولی</a>
    </div>
    </div>

    <?php posted("5", "نام شخص یا موسسه مورد نظر", "2000", "30", "delete"); ?>
    <?php posted("5", "نام شخص یا موسسه مورد نظر", "2000", "30", "delete"); ?>
    <?php posted("5", "نام شخص یا موسسه مورد نظر", "2000", "30", "delete"); ?>
    <?php posted("5", "نام شخص یا موسسه مورد نظر", "2000", "30", "delete"); ?>

    </div>
</div>
<div class="col-md-2"></div>
</div>

<?php get_footer(); ?>