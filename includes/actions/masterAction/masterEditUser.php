<?php
function masterEditUser($UserId){
    $dbConn = dbConnection();
    $queryUserId = "SELECT * FROM users WHERE id = '$UserId' ";
    $queryResqueryEditUser = mysqli_query($dbConn, $queryUserId);
    return mysqli_fetch_assoc($queryResqueryEditUser);
};


function masterEditUserInput($newName,$newLastName,$newPhone,$userId){
    $dbConn = dbConnection();
    $queryUpdateMasterEditUserInput = "UPDATE users SET name='$newName',lastName='$newLastName',phone='$newPhone' WHERE id = '$userId' AND userAccess = 1 ";
    $queryResUpdateMasterEditUserInput = mysqli_query($dbConn, $queryUpdateMasterEditUserInput);
    alert("کاربر مورد نظر با موفقیت ویرایش شد.", "success");        
};
function masterEditUserPassword($userPassword,$userId){
    $dbConn = dbConnection();
    $queryUpdateMasterEditUserPassword = "UPDATE users SET password='$userPassword' WHERE id = '$userId' AND userAccess = 1 ";
    $queryResUpdateMasterEditUserPassword = mysqli_query($dbConn, $queryUpdateMasterEditUserPassword);
    alert("کلمه عبور شما با موفقیت ویرایش شد.", "success");        
};

function activeUser(){
    $dbConn = dbConnection();
    $queryUpdateAdStatus = "UPDATE users SET userStatus='1' WHERE id = '$_GET[editUserId]'";
    $queryResUpdateAdStatus = mysqli_query($dbConn, $queryUpdateAdStatus);
    alert("حساب کاربری مورد نظر فعال شد.","success");
};
function suspendUser(){
    $dbConn = dbConnection();
    $queryUpdateAdStatus = "UPDATE users SET userStatus='0' WHERE id = '$_GET[editUserId]'";
    $queryResUpdateAdStatus = mysqli_query($dbConn, $queryUpdateAdStatus);
    alert("حساب کاربری مورد نظر مسدود شد.","error");


};

?>