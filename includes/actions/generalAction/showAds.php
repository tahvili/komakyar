<?php
// show location
function showLocation ($location){
    switch ($location) {
        case "bc":
            echo "بریتیش کلمبیا";
            break;

            case "mb":
            echo "منیتوبا";
            break;
            
            case "nb":
            echo "نیوبرانزویک";
            break;
            
            case "nl":
            echo "نیوفاندلند";
            break;
            
            case "nt":
            echo "سرزمینهای شمال غربی";
            break;
            
            case "ns":
            echo "نوا اسکوشیا";
            break;
            
            case "on":
            echo "آنتاریو";
            break;
            
            case "pe":
            echo "پرنس ادوارد";
            break;
            
            case "qc":
            echo "کبک";
            break;
            
            case "sk":
            echo "ساسکاچوان";
            break;
            
            case "nu":
            echo "نوناووت";
            break;
            
            case "yt":
            echo "یوکان";
            break;

        default:
        echo "تمامی استان ها";
    }
};

function ShowAds($showAdsprovince = null,$showAdsCategory = null){
    switch ($showAdsprovince) {
        case "bc":
            $showAdsprovince = "British Columbia";
            break;

            case "mb":
                $showAdsprovince = "Manitoba";
            break;
            
            case "nb":
                $showAdsprovince = "New Brunswick";
            break;
            
            case "nl":
                $showAdsprovince = "Newfoundland and Labrador";
            break;
            
            case "nt":
                $showAdsprovince = "Northwest Territories";
            break;
            
            case "ns":
                $showAdsprovince = "Nova Scotia";
            break;
            
            case "on":
                $showAdsprovince = "Ontario";
            break;
            
            case "pe":
                $showAdsprovince = "Prince Edward Island";
            break;
            
            case "qc":
                $showAdsprovince = "Quebec";
            break;
            
            case "sk":
                $showAdsprovince = "Saskatchewan";
            break;
            
            case "nu":
                $showAdsprovince = "Nunavut";
            break;
            
            case "yt":
                $showAdsprovince = "Yukon";
            break;

    }

    $dbConn = dbConnection();


    $queryShowAds = "SELECT * FROM ads WHERE adStatus = '2' ";


    if(isset($showAdsprovince)){
        $queryShowAds = "SELECT * FROM ads WHERE adStatus = '2' AND adProvince = '$showAdsprovince'";
    };

    if(isset($showAdsprovince) & isset($showAdsCategory)){
        $queryShowAds = "SELECT * FROM ads WHERE adStatus = '2' AND adProvince = '$showAdsprovince' AND adCategory = '$showAdsCategory'";
    };

    $queryResShowAds = mysqli_query($dbConn, $queryShowAds);
    while ($queryRowResShowAds = mysqli_fetch_array($queryResShowAds)){
        echo '<div class="col-md-6 mb-4">';
        echo '<div class="page">';
        echo '<div class="ad-head">';
        echo '<h2>'. $queryRowResShowAds['bussinesName'].'</h2>';
        echo '<p>'. $queryRowResShowAds['adTitle'].'</p>';
        echo '</div>';
        echo '<div class="ad-body">';
        echo '<p>'. $queryRowResShowAds['adText'].'</p>';
        echo '<div class="ad-code text-left d-ltr">';
        echo '<i class="fas fa-fingerprint"></i>';
        echo '<span>'. $queryRowResShowAds['adId'].'</span>';
        echo '</div>';
        echo '<ul>';
        echo '<li>';
        echo '<i class="fas fa-phone-alt"></i>';
        echo '<span>'. $queryRowResShowAds['adPhone'].'</span>';
        echo '</li>';
        echo '<li>';
        echo '<i class="fas fa-map-marker-alt"></i>';
        echo '<span>'. $queryRowResShowAds['adAddress'].'</span>';
        echo '</li>';
        echo '<li>';
        echo '<i class="fas fa-tv"></i>';
        echo '<a href="#">'. $queryRowResShowAds['adWebsite'].'</a>';
        echo '</li>';
        echo '<li>';
        echo '<i class="fab fa-facebook-f"></i>';
        echo '<a href="#">'. $queryRowResShowAds['adFacebook'].'</a>';
        echo '</li>';
        echo '<li>';
        echo '<i class="fab fa-instagram"></i>';
        echo '<a href="#">'. $queryRowResShowAds['adInstagram'].'</a>';
        echo '</li>';
        echo '<li>';
        echo '<i class="fab fa-telegram"></i>';
        echo '<a href="#">'. $queryRowResShowAds['adTelegram'].'</a>';
        echo '</li>';
        echo '</ul>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    };
    

    if (mysqli_num_rows($queryResShowAds) == 0){
        echo "<div class='alert alert-info text-center w-100'>دوست عزیزم در حال حاضر در این دسته بندی ، هنوز آگهی ثبت نشده است شما میتوانید اولین آگهی این فیلد را ثبت کنید.</div>";
    };
};


?>