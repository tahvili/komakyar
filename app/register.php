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
            <input type="tel" name="userRegister[phonenumber]" placeholder="شماره موبایل*" required id="phone">
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