<?php
function showUserAds($userEmail){
    $dbConn = dbConnection();

    $queryUserId = "SELECT * FROM users WHERE email = '$userEmail' ";
    $queryResUserId = mysqli_query($dbConn, $queryUserId);
    $queryRowUserId = mysqli_fetch_assoc($queryResUserId) ;
    $newAdUserId = $queryRowUserId['id'];

    $queryShowUserAds = "SELECT * FROM ads WHERE userId = '$newAdUserId' ORDER BY adDate DESC";
    $queryResShowUserAds = mysqli_query($dbConn, $queryShowUserAds);

    while ($queryRowShowUserAds = mysqli_fetch_array($queryResShowUserAds)){
        $resAdDate = explode(' ', $queryRowShowUserAds['adDate']);
        echo "<tr>";
        echo "<th>" . $queryRowShowUserAds['adId'] . "</th>";
        echo "<th>" . $queryRowShowUserAds['adTitle'] . "</th>";
        echo "<th class='d-ltr'>" . $resAdDate['0'] . "</th>";
        
        if($queryRowShowUserAds['adStatus'] == 1 ){
            echo "<th scope='row'>
            <span class='badge btn-komakyar-sm-b-radius badge-warning p-2'>در حال بررسی</span></th>";
        
        }elseif($queryRowShowUserAds['adStatus'] == 2){
            echo "<th scope='row'>
            <span class='badge btn-komakyar-sm-b-radius badge-success p-2'>تائید شده</span></th>";
        }else {
            echo "<th scope='row'>
            <span class='badge btn-komakyar-sm-b-radius badge-danger p-2'>رد شده</span></th>";
        }

        
        echo "<td><a class='btn btn-komakyar-sm btn-sm' href='show-ad.php?adId=" . $queryRowShowUserAds['adId'] . "'>نمایش آگهی</a></td>";

        echo "</<tr>";  
    };

};
?>