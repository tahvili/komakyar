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
            <img src="../up/profile.png" class="profile-picture">
            <div class="profile-username">محمد تحویلی</div>
            <form class="profile-change" action="../includes/server/pull.php" method="post">
                <input type="text" name="userRegister[name]" placeholder="نام" required>
                <input type="text" name="userRegister[lastname]" placeholder="نام خانوادگی" required>
                <input type="password" name="passLogin" placeholder="کلمه عبور" required>
                <button name="submitUserLogin" type="submit">ثبت تغییرات</button>
            </form>
        </div>

    </div>
    <div class="col-md-7">
        <div class="box">
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
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">KM-1161880</th>
      <td>طراحی سایت تورونتو</td>
      <td>2020-09-03 23:11:36</td>
      <td><span class="badge badge-warning p-2">در حال بررسی</span></td>
    </tr>
    <?php echo $_SESSION['mailSession'];?>
  </tbody>
</table>
        </div>

    </div>


    <div class="col-md-1"></div>
</div>

<?php get_footer(); ?>