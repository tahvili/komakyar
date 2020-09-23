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
            <select name="adRegister[adCategory]" id="category" required style="  -webkit-appearance: none;-moz-appearance: none;appearance: none;">
                <option value="" disabled selected hidden>انتخاب دسته بندی*</option>
                <option value="constructions">خدمات ساختمانی</option>
                <option value="realtor">مشاور املاک</option>
                <option value="education">آموزش</option>
            </select>
            <textarea rows="6" name="adRegister[adText]" placeholder="متن آگهی*"></textarea>
            <input type="tel" placeholder="شماره موبایل" id="phone">
            <input type="tel" name="adRegister[full_phone]" hidden>
            <script src="../assets/js/build/js/intlTelInput.js"></script>
            <script>
                var input = document.querySelector("#phone");
                intlTelInput(input, {
                    initialCountry: "auto",
                    geoIpLookup: function(success, failure) {
                        $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                        var countryCode = (resp && resp.country) ? resp.country : "us";
                        success(countryCode);
                        });
                    },
                    hiddenInput: "full_phone",
                    utilsScript: "../assets/js/build/js/utils.js"
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