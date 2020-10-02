<?php 
require $_SERVER['DOCUMENT_ROOT'] .'/includes/functions.php';
get_header(''); ?>

<div class="row no-padding">
    <div class="col-md-3"></div>
    <div class="col-md-6 box" style="margin-bottom:60px;">
        <form class="create" action="includes/server/push.php" method="post"><br>
<h1>تماس با ما</h1>
<h5>پیام شما می‌تواند شروع یک مکالمۀ سازنده باشد</h5><br>
            <input type="text" name="contactForm[fullName]" placeholder="نام و نام خانوادگی*" required>
            <input type="text" name="contactForm[website]" placeholder="آدرس وب سایت">
            <input type="text" name="contactForm[phoneNumber]" placeholder="شماره تماس">
            <input type="text" name="contactForm[email]" placeholder="پست الکترونیکی*" required>
            <input type="text" name="contactForm[subject]" placeholder="موضوع پیام*" required>
            <textarea name="contactForm[textMessage]" placeholder="توضیحات" style="height:200px;"></textarea>
            <?php error(); ?>

            <button name="submitContact" type="submit">ارسال پیام</button>

        </form>
    </div>
    <div class="col-md-3"></div>
</div>

<?php get_footer(); ?>