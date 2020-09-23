<?php 
require '../includes/functions.php';

if (isset($_SESSION['mailSession'])) {
    header('Location: panel.php');
}

get_header('transparent'); 
?>

<div class="row no-padding">
    <div class="col-md-6 blue full-height vertical-center">

        <form class="register" action="../includes/server/push.php" method="post">
        <?php error(); ?>
            <input type="text" name="userRegister[name]" placeholder="نام*" required>
            <input type="text" name="userRegister[lastname]" placeholder="نام خانوادگی*" required>
            <input type="email" name="userRegister[email]" placeholder="آدرس ایمیل*" required>
            <input type="tel" placeholder="شماره موبایل*" id="phone" required>
            <input type="tel" name="userRegister[full_phone]" hidden>
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
            <input type="password" name="userRegister[password]" placeholder="کلمه عبور*" required>
            <button name="submitUserRegister" type="submit">ثبت نام</button>
            <br>
            <span class="psw"><a href="login">کاربر هستید؟ وارد شوید</a></span>
        </form>

    </div>
    <div class="col-md-6 white map full-height vertical-center">
    </div>
</div>

<?php get_footer(); ?>