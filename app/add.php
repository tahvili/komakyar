<?php 
require $_SERVER['DOCUMENT_ROOT'] .'/includes/functions.php';
get_header(''); ?>

<div class="row no-padding">
<div class="col-md-3"></div>
<div class="col-md-6 box" style="margin-bottom:60px;">
<form class="create" action="" method="post">
    <input type="text" name="" placeholder="نام شرکت" required>
    <input type="text" name="" placeholder="عنوان آگهی" required>
    <textarea rows="6">
    متن آگهی
    </textarea>
    <input type="text" name="" placeholder="شماره موبایل" required>
    <input type="text" name="" placeholder="آدرس" required>
    <input type="text" name="" placeholder="کدپستی" required>
    <input type="text" name="" placeholder="آدرس ایمیل" required>
    <input type="text" name="" placeholder="آدرس وبسایت" required>
    <input type="text" name="" placeholder="فیسبوک" required>
    <input type="text" name="" placeholder="اینستاگرم" required>
    <input type="text" name="" placeholder="تلگرام" required>
    <input type="text" name="" placeholder="نام قانونی شرکت">
    <small>اگر یک شرکت حقوقی ثبت شده در کانادا دارید ، لطفا آن را ارائه دهید زیرا ما از این نام برای تأیید آدرس و تجارت شما استفاده خواهیم کرد.</small>
    <br><br>
    <button name="submit" type="submit">ثبت اطلاعات</button>

</form>
</div>
<div class="col-md-3"></div>
</div>

<?php get_footer(); ?>