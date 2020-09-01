<?php
// General
include 'config.php';
$dbConn = dbConnection();

// Login  User
if(isset($_POST['submitUserLogin'])){
    $mailLogin = $_POST['emailLogin'];
    $passLogin = $_POST['passLogin'];
    $passLogin = md5($_POST['passLogin']);
    $queryUserLogin = "SELECT * FROM users WHERE email = '$mailLogin' ";
    $queryResUserLogin = mysqli_query($dbConn, $queryUserLogin);
    $queryRowUserLogin = mysqli_fetch_assoc($queryResUserLogin) ;
  
    if ($mailLogin == $queryRowUserLogin['email'] && $passLogin == $queryRowUserLogin['password']){
        header('Location: ../../app/panel.php?login=success');
    }else {
        header('Location: ../../app/login.php?password=error');
    };
}


?>