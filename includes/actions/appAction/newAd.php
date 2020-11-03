<?php
function newAd ($newAdBussinesName,$newAdTitle,$newAdText,$newAdPhone,$newAdCategory,$newAdProvince,$newAdCity,$newAdAddress,$newAdpostcode,$newAdEmail,$newAdWebsite,$newAdFacebook,$newAdInstagram,$newAdTelegram) {

    $dbConn = dbConnection();

    $userEmail = $_SESSION["userEmail"];
    $queryUserId = "SELECT * FROM users WHERE email = '$userEmail' ";
    $queryResUserId = mysqli_query($dbConn, $queryUserId);
    $queryRowUserId = mysqli_fetch_assoc($queryResUserId) ;
    $newAdUserId = $queryRowUserId['id'];

    $newAdId = "KM-" . $newAdUserId . rand(1000,999999);

    $queryNewAd = "INSERT INTO ads (userId, adId, bussinesName, adTitle, adText, adPhone, adCategory, adProvince, adCity, adAddress, postcode, adEmail, adWebsite, adFacebook, adInstagram, adTelegram, adStatus) VALUES ('$newAdUserId', '$newAdId', '$newAdBussinesName', '$newAdTitle', '$newAdText', '$newAdPhone', '$newAdCategory', '$newAdProvince', '$newAdCity', '$newAdAddress', '$newAdpostcode', '$newAdEmail', '$newAdWebsite', '$newAdFacebook', '$newAdInstagram', '$newAdTelegram', '1')";


    if(mysqli_query($dbConn, $queryNewAd)) {
        alert("آگهی با موفقیت ثبت شد..", "success");
    }

    else {
        alert("یک خطای سیستمی رخ داد", "error");
    }


   

};

?>