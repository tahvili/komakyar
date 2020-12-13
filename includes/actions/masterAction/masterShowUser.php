<?php
function masterShowUser($UserId){
    $dbConn = dbConnection();
    $queryUserId = "SELECT * FROM users WHERE id = '$UserId' ";
    $queryResqueryUserId = mysqli_query($dbConn, $queryUserId);
    return mysqli_fetch_assoc($queryResqueryUserId);
};

function masterShowUserAds($UserId){
    $dbConn = dbConnection();
    $queryUserAds = "SELECT * FROM ads WHERE userId = '$UserId' ORDER BY adDate DESC";
    $queryResShowAds = mysqli_query($dbConn, $queryUserAds);

    while ($queryRowShowAds = mysqli_fetch_array($queryResShowAds)){
        $resAdDate = explode(' ', $queryRowShowAds['adDate']);
        echo "<tr>";
        echo "<th>" . $queryRowShowAds['adId'] . "</th>";
        echo "<th>" . $queryRowShowAds['adTitle'] . "</th>";
        echo "<th class='d-ltr'>" . $resAdDate['0'] . "</th>";
        
        if($queryRowShowAds['adStatus'] == 1 ){
            echo "<th scope='row'>
            <span class='badge btn-komakyar-sm-b-radius badge-warning p-2'>در حال بررسی</span></th>";
        
        }elseif($queryRowShowAds['adStatus'] == 2){
            echo "<th scope='row'>
            <span class='badge btn-komakyar-sm-b-radius badge-success p-2'>تائید شده</span></th>";
        }else {
            echo "<th scope='row'>
            <span class='badge btn-komakyar-sm-b-radius badge-danger p-2'>رد شده</span></th>";
        };

        echo "<td><a class='btn btn-komakyar-sm btn-sm' href='show-ad.php?adId=". $queryRowShowAds['adId'] ."&userId=".$_GET['userId']."'>نمایش آگهی</a></td>" ;

        echo "</<tr>";  
    };

    if (mysqli_num_rows($queryResShowAds) == 0){
        echo "<th colspan='5'>در حال حاضر این کاربر هیچ آگهی ثبت نکرده است.</th>";
    };

};


?>