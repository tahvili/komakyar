<?php
function reportProvenceAds (){

    $dbConn = dbConnection();

    $queryCountAdsProvince = "SELECT adProvince,COUNT(*) FROM ads GROUP BY adProvince ";
    $queryResCountAdsProvince = mysqli_query($dbConn, $queryCountAdsProvince);
    $CountAdsProvince = array();
    while ($queryRowResCountAdsProvince = mysqli_fetch_array($queryResCountAdsProvince)){
        $CountAdsProvince[] = 
        array(
            // $queryRowResCountAdsProvince['adProvince'], 
            $queryRowResCountAdsProvince['COUNT(*)'], 
        );
    }

    function CountAdsProvinceJson ($input_array) {
        $output_array = array();
    
        for ($i = 0; $i < count($input_array); $i++) {
          for ($j = 0; $j < count($input_array[$i]); $j++) {
            $output_array[] = $input_array[$i][$j];
          }
        }
        echo json_encode($output_array);
    }
    CountAdsProvinceJson($CountAdsProvince);
    
};

function reportDashboard(){
  $dbConn = dbConnection();

  $queryCountAds0 = "SELECT * FROM ads WHERE adStatus = 0"; 
  $queryCountResAds0 = mysqli_query($dbConn, $queryCountAds0); 
  $queryCountRowAds0 = mysqli_num_rows($queryCountResAds0);

  $queryCountAds1 = "SELECT * FROM ads WHERE adStatus = 1"; 
  $queryCountResAds1 = mysqli_query($dbConn, $queryCountAds1); 
  $queryCountRowAds1 = mysqli_num_rows($queryCountResAds1);

  $queryCountAds2 = "SELECT * FROM ads WHERE adStatus = 2"; 
  $queryCountResAds2 = mysqli_query($dbConn, $queryCountAds2); 
  $queryCountRowAds2 = mysqli_num_rows($queryCountResAds2);

  $queryCountUsers = "SELECT * FROM users"; 
  $queryCountResUsers = mysqli_query($dbConn, $queryCountUsers); 
  $queryCountRowUsers = mysqli_num_rows($queryCountResUsers);

  $reportDashboard = array($queryCountRowAds0,$queryCountRowAds1,$queryCountRowAds2, $queryCountRowUsers);

  return array($queryCountRowAds0,$queryCountRowAds1,$queryCountRowAds2, $queryCountRowUsers);;
};

?>