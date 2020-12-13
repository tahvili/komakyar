<?php
function userLogin ($userLoginEmail,$userLoginPassword) {
    $dbConn = dbConnection();
    $userLoginPassword = md5($userLoginPassword);
    $queryuserLogin = "SELECT * FROM users WHERE email = '$userLoginEmail'  AND userAccess = 1" ;
    $queryResUserLogin = mysqli_query($dbConn, $queryuserLogin);
    $queryRowUserLogin = mysqli_fetch_assoc($queryResUserLogin) ;

    $ip = $_SERVER['REMOTE_ADDR'];

    $browser= "Null" ;

    if($queryRowUserLogin['userStatus'] == 1){
        if($userLoginEmail == $queryRowUserLogin['email'] && $userLoginPassword == $queryRowUserLogin['password']) {
            $_SESSION["userEmail"] = $queryRowUserLogin['email'];
            $detail= "10001" ;
            $queryLogs = "INSERT INTO logs (userId,ip,browser,email,detail) VALUES ('$queryRowUserLogin[id]','$ip','$browser','$userLoginEmail','$detail')";
            $queryResLogs =  mysqli_query($dbConn, $queryLogs);
            header('Location: ../../../app/index.php?login=success');
        }
        else {
            $detail= "10002" ;
            $queryLogs = "INSERT INTO logs (userId,ip,browser,email,detail) VALUES ('$queryRowUserLogin[id]','$ip','$browser','$userLoginEmail','$detail')";
            $queryResLogs =  mysqli_query($dbConn, $queryLogs);
            alert("نام کاربری و یا رمز عبور شما اشتباه است.", "error");
        }
    }elseif($queryRowUserLogin['userStatus'] == 0){
        $detail= "10003" ;
        $queryLogs = "INSERT INTO logs (userId,ip,browser,email,detail) VALUES ('$queryRowUserLogin[id]','$ip','$browser','$userLoginEmail','$detail')";
        $queryResLogs =  mysqli_query($dbConn, $queryLogs);
        echo '<script>
Swal.fire({
  icon: \'error\',
  confirmButtonText: \'تائید\',
  text: \'حساب کاربری شما مسدود شده است.\',
})
</script>';
    
    }else{
        $detail= "10004" ;
        $queryLogs = "INSERT INTO logs (userId,ip,browser,email,detail) VALUES ('$queryRowUserLogin[id]','$ip','$browser','$userLoginEmail','$detail')";
        $queryResLogs =  mysqli_query($dbConn, $queryLogs);
        alert("حساب کاربری یافت نشد.", "error");
    };


};

?>