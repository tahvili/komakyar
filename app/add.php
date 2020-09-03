<?php 
require $_SERVER['DOCUMENT_ROOT'] .'/includes/functions.php';
if (!isset($_SESSION['mailSession'])) {
    header('Location: login.php?login=require');
}
get_header(''); ?>

<div class="row no-padding">
    <div class="col-md-3"></div>
    <div class="col-md-6 box" style="margin-bottom:60px;">
        <form class="create" action="../includes/server/push.php" method="post">
            <input hidden name="adRegister[adUsermail]" value="<?php echo $_SESSION['mailSession']; ?>">
            <input type="text" name="adRegister[bussinesName]" placeholder="نام کسب و کار" required>
            <input type="text" name="adRegister[adTitle]" placeholder="عنوان آگهی" required>
            <textarea rows="6" name="adRegister[adText]" placeholder="متن آگهی"></textarea>
            <input type="text" name="adRegister[phoneNumber]" placeholder="شماره تلفن" required>
            <input type="text" name="adRegister[address]" placeholder="آدرس" required>
            <input type="text" name="adRegister[postCode]" placeholder="کدپستی" required>
            <input type="text" name="adRegister[mail]" placeholder="آدرس ایمیل" required>
            <input type="text" name="adRegister[website]" placeholder="آدرس وبسایت" required>
            <input type="text" name="adRegister[facebook]" placeholder="فیسبوک" required>
            <input type="text" name="adRegister[instagram]" placeholder="اینستاگرم" required>
            <input type="text" name="adRegister[telegram]" placeholder="تلگرام" required>
            <input type="text" name="adRegister[legalBussinessName]" placeholder="نام قانونی شرکت">
            <small>اگر یک شرکت حقوقی ثبت شده در کانادا دارید ، لطفا آن را ارائه دهید زیرا ما از این نام برای تأیید آدرس
                و تجارت شما استفاده خواهیم کرد.</small>
            <br><br>
            <button name="submitAd" type="submit">ثبت اطلاعات</button>

        </form>
    </div>
    <div class="col-md-3"></div>
</div>

<?php get_footer(); ?>