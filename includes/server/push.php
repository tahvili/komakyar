<?php
// General
include 'config.php';
$dbConn = dbConnection();

// Add New User
if(isset($_POST['submitUserRegister'])){
    $userRegister = $_POST['userRegister'];
    $userRegister['password'] = md5($userRegister ['password']);

    $queryUserRegister = "INSERT INTO users (name,lastName,email,phonenumber,password) VALUES ('$userRegister[name]','$userRegister[lastname]','$userRegister[email]','$_POST[full_phone]','$userRegister[password]')";
    mysqli_query($dbConn, $queryUserRegister);   

    header('Location: ../../app/login.php?register=success');
}
// Add New Ad
if(isset($_POST['submitAd'])){
    $adRegister = $_POST['adRegister'];  
    $queryUser = "SELECT * FROM users WHERE email = '$adRegister[adUsermail]' ";
    $queryResUser = mysqli_query($dbConn, $queryUser);
    $queryRowUser = mysqli_fetch_assoc($queryResUser) ;
    $adRegister['userId'] = $queryRowUser['id'];
    $adRegister['adCode'] = "KM-" . $adRegister['userId'] . rand(1000,999999);
    
     $queryAdCreat = "INSERT INTO ads (userID, adCode, bussinesName, adTitle, adText, phoneNumber, address, postCode, mail, website, facebook, instagram, telegram, legalBussinessName) VALUES ('$adRegister[userId]', '$adRegister[adCode]', '$adRegister[bussinesName]', '$adRegister[adTitle]', '$adRegister[adText]', '$_POST[full_phone]', '$adRegister[address]', '$adRegister[postCode]', '$adRegister[mail]', '$adRegister[website]', '$adRegister[facebook]', '$adRegister[instagram]', '$adRegister[telegram]', '$adRegister[legalBussinessName]')";
     mysqli_query($dbConn, $queryAdCreat);
     header('Location: ../../app/panel.php?ads=success');

};


?>