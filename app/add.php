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
            <input type="text" name="adRegister[bussinesName]" placeholder="نام کسب و کار*" required>
            <input type="text" name="adRegister[adTitle]" placeholder="عنوان آگهی*" required>
            <textarea rows="6" name="adRegister[adText]" placeholder="متن آگهی*"></textarea>
            <input type="tel" name="userRegister[phonenumber]" placeholder="شماره موبایل" id="phone">
            <script src="../assets/js/build/js/intlTelInput.min.js"></script>
            <script>
                var input = document.querySelector("#phone");
                window.intlTelInput(input, {
                    initialCountry: "auto",
                    geoIpLookup: function(callback) {
                        $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                        var countryCode = (resp && resp.country) ? resp.country : "";
                        callback(countryCode);
                        });
                    },
                    utilsScript: "../assets/js/build/js/utils.js" // just for formatting/placeholders etc
                    });
            </script>  
            <input type="text" name="adRegister[address]" placeholder="آدرس*" required>
            <input type="text" name="adRegister[postCode]" placeholder="کدپستی*" required>
            <input type="text" name="adRegister[mail]" placeholder="آدرس ایمیل*">
            <input type="text" name="adRegister[website]" placeholder="آدرس وبسایت">
            <input type="text" name="adRegister[facebook]" placeholder="فیسبوک">
            <input type="text" name="adRegister[instagram]" placeholder="اینستاگرم">
            <input type="text" name="adRegister[telegram]" placeholder="تلگرام">
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