<?php
function masterShowAdd($adId){
    $dbConn = dbConnection();
    $queryAdId = "SELECT * FROM ads WHERE adId = '$adId' ";
    $queryResqueryAdId = mysqli_query($dbConn, $queryAdId);
    return mysqli_fetch_assoc($queryResqueryAdId);
};

function masterShowAddUserEmail($userId){
    $dbConn = dbConnection();
    $queryUserId = "SELECT * FROM users WHERE id = '$userId' AND userAccess = 1" ;
    $queryResUserId = mysqli_query($dbConn, $queryUserId);
    $queryRowUserId = mysqli_fetch_assoc($queryResUserId);
    $queryRowUserId = $queryRowUserId['email'];
    echo $queryRowUserId;
};
function AdApproval(){
    $dbConn = dbConnection();
    $queryUpdateAdStatus = "UPDATE ads SET adStatus='2' WHERE adId = '$_GET[adId]'";
    $queryResUpdateAdStatus = mysqli_query($dbConn, $queryUpdateAdStatus);
    alert("آگهی با موفقیت تائید شد.","success");
};
function AdReject(){
    $dbConn = dbConnection();
    $queryUpdateAdStatus = "UPDATE ads SET adStatus='0' WHERE adId = '$_GET[adId]'";
    $queryResUpdateAdStatus = mysqli_query($dbConn, $queryUpdateAdStatus);
    alert("آگهی با موفقیت رد شد.","error");


};


?>