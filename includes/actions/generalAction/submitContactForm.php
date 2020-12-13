<?php
function submitContactForm ($SubmitContacFullName,$SubmitContactEmail,$SubmitContactPhone,$SubmitContactWebsite,$SubmitContactSubject,$SubmitContactMessage) {

    $dbConn = dbConnection();

    $queryContactForm = "INSERT INTO contact (fullName,email,phoneNumber,website,subject,textMessage) VALUES ('$SubmitContacFullName','$SubmitContactEmail','$SubmitContactPhone','$SubmitContactWebsite','$SubmitContactSubject','$SubmitContactMessage')";


    if(mysqli_query($dbConn, $queryContactForm)) {
        alert("پیام شما با موفقیت ثبت شد.", "success");
    }

    else {
        alert("یک خطای سیستمی رخ داد", "error");
    }

};

?>