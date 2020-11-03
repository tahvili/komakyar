<?php
function MasterSettings($oldPassword,$newPassword,$repeatPassword){
    $oldPassword = md5($oldPassword);
    $newPassword = md5($newPassword);
    $repeatPassword = md5($repeatPassword);

    $dbConn = dbConnection();

    $MasterSettings = $_SESSION["masterEmail"];
    $queryMasterSettings = "SELECT * FROM users WHERE email = '$MasterSettings' AND userAccess = 2 ";
    $queryResMasterSettings = mysqli_query($dbConn, $queryMasterSettings);
    $queryRowMasterSettings = mysqli_fetch_assoc($queryResMasterSettings) ;
    

    if ($queryRowMasterSettings['password'] !== $oldPassword) {
        alert("رمز عبور فعلی خود را اشتباه وارد میکنید.", "error");
    };

    if ($newPassword !== $repeatPassword) {
        alert("رمز عبور جدید و تکرار رمز عبور جدید یکسان نمیباشد.", "error");
    } elseif ($queryRowMasterSettings['password'] == $oldPassword & $newPassword == $repeatPassword ) {
        $queryUpdateMasterSettings = "UPDATE users SET password='$repeatPassword' WHERE email = '$MasterSettings' AND userAccess = 2 ";
        $queryRespdateMasterSettings = mysqli_query($dbConn, $queryUpdateMasterSettings);
        alert("رمز عبور شما با موفقیت تغیر پیدا کرد.", "success");
    };

    

};
?>