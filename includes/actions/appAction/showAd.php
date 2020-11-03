<?php
function ShowAd($adId){
    $dbConn = dbConnection();
    $queryShowAd = "SELECT * FROM ads WHERE adId = '$adId'" ;
    $queryResShowAd = mysqli_query($dbConn, $queryShowAd);
    global $queryRowShowAd;
    $queryRowShowAd = mysqli_fetch_assoc($queryResShowAd);
};
?>