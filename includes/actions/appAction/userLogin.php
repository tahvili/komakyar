<?php
function userLogin ($userLoginEmail,$userLoginPassword) {

    $dbConn = dbConnection();
    $userLoginPassword = md5($userLoginPassword);

    $queryuserLogin = "SELECT * FROM users WHERE email = '$userLoginEmail'  AND userAccess = 1" ;

    $queryResUserLogin = mysqli_query($dbConn, $queryuserLogin);
    $queryRowUserLogin = mysqli_fetch_assoc($queryResUserLogin) ;


    if($userLoginEmail == $queryRowUserLogin['email'] && $userLoginPassword == $queryRowUserLogin['password']) {
        $_SESSION["userEmail"] = $queryRowUserLogin['email'];
        header('Location: ../../../app/index.php?login=success');
    }

    else {
        alert("نام کاربری و یا رمز عبور شما اشتباه است.", "error");
    }

};

?>