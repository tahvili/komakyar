<?php
function userSettings($oldPassword,$newPassword,$repeatPassword){
    $oldPassword = md5($oldPassword);
    $newPassword = md5($newPassword);
    $repeatPassword = md5($repeatPassword);

    $dbConn = dbConnection();

    $userSettings = $_SESSION["userEmail"];
    $queryUserSettings = "SELECT * FROM users WHERE email = '$userSettings' ";
    $queryResUserSettings = mysqli_query($dbConn, $queryUserSettings);
    $queryRowUserSettings = mysqli_fetch_assoc($queryResUserSettings) ;
    

    if ($queryRowUserSettings['password'] !== $oldPassword) {
        alert("رمز عبور فعلی خود را اشتباه وارد میکنید.", "error");
    };

    if ($newPassword !== $repeatPassword) {
        alert("رمز عبور جدید و تکرار رمز عبور جدید یکسان نمیباشد.", "error");
    } elseif ($queryRowUserSettings['password'] == $oldPassword & $newPassword == $repeatPassword ) {
        $queryUpdateUserSettings = "UPDATE users SET password='$repeatPassword' WHERE email = '$userSettings'";
        $queryRespdateUserSettings = mysqli_query($dbConn, $queryUpdateUserSettings);
        alert("رمز عبور شما با موفقیت تغیر پیدا کرد.", "success");
    };

    

};
?>