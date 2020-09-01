<?php
// General
include 'config.php';
$dbConn = dbConnection();

// Add New User
if(isset($_POST['submitUserRegister'])){
    $userRegister = $_POST['userRegister'];
    $userRegister['password'] = md5($userRegister ['password']);
    $queryUserRegister = "INSERT INTO users (name,lastName,email,phonenumber,password) VALUES ('$userRegister[name]','$userRegister[lastname]','$userRegister[email]','$userRegister[phonenumber]','$userRegister[password]')";
    mysqli_query($dbConn, $queryUserRegister);
    header('Location: ../../app/panel.php?register=success');

}


?>