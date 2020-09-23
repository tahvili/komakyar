<?php
    session_start();
    define('ABSPATH', TRUE);
	include $_SERVER['DOCUMENT_ROOT'] . '/includes/server/config.php';



function page_title() {
	return ("<title>blub</title>");
}

function menu() {
	include $_SERVER['DOCUMENT_ROOT'] . '/includes/menu.php';
}

function main_sponsor() {
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/sponsor.php';
}

function get_header($state) {
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
    if ($state=="transparent"){
        echo "<link rel='stylesheet' id='style-css' href='../assets/css/transparent.css' media='all' />";
    }
}

function get_footer() {
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php';
}

function searchbox() {
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/search.php';
}

function category() {
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/category.php';
}

function get_control(){
    include $_SERVER['DOCUMENT_ROOT'] . '/newFolder/control.php';
}

function newsletter() {
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/newsletter.php';
}

function ads($company, $title, $description, $phone, $address, $instagram, $facebook, $website) {
    $value = "<div class='col-md-6'><div class='ad'>
    <h4>".$company."</h4><br><p><b>".$title."</b></p><br><p>".$description."</p><br><ul>";
    if($phone!=""){$value=$value."<li><img src='../assets/img/phone.svg' alt='Phone Number'><a href='tel:".$phone."'>".$phone."</a></li>";}
    if($address!=""){$value=$value."<li><img src='../assets/img/pin.svg' alt='Location'><a href='https://www.google.com/maps/place/".$address."'>".$address."</a></li>";}
    if($instagram!=""){$value=$value."<li><img src='../assets/img/instagram.svg' alt='Instagram'><a href='https://instagram.com/".$instagram."'>".$instagram."</a></li>";}
    if($facebook!=""){$value=$value."<li><img src='../assets/img/facebook.svg' alt='Facebook'><a href='https://www.facebook.com/".$instagram."'>".$facebook."</a></li>";}
    if($website!=""){$value=$value."<li><img src='../assets/img/pc.svg' alt='Website'><a href='//".$website."'>".$website."</a></li>";}
    $value=$value."<li><img src='../assets/img/pc.svg' alt='Website'><a href='//".$website."'>".$website."</a></li></ul></div></div>";
    echo $value;
    echo $value;
}

function view($company, $title, $description, $phone, $address, $instagram, $facebook, $website) {
    $value = "<div class='col-md-12'><div class='ad-view'>
    <h3>".$company."</h3><p><b>".$title."</b></p><p>".$description."</p><ul>";
    if($phone!=""){$value=$value."<li><img src='../assets/img/phone.svg' alt='Phone Number'><a href='tel:".$phone."'>".$phone."</a></li>";}
    if($address!=""){$value=$value."<li><img src='../assets/img/pin.svg' alt='Location'><a href='https://www.google.com/maps/place/".$address."'>".$address."</a></li>";}
    if($instagram!=""){$value=$value."<li><img src='../assets/img/instagram.svg' alt='Instagram'><a href='https://instagram.com/".$instagram."'>".$instagram."</a></li>";}
    if($facebook!=""){$value=$value."<li><img src='../assets/img/facebook.svg' alt='Facebook'><a href='https://www.facebook.com/".$instagram."'>".$facebook."</a></li>";}
    if($website!=""){$value=$value."<li><img src='../assets/img/pc.svg' alt='Website'><a href='//".$website."'>".$website."</a></li>";}
    $value=$value."<li><img src='../assets/img/pc.svg' alt='Website'><a href='//".$website."'>".$website."</a></li></ul></div></div>";
    echo $value;
}

function error(){

    if(isset($_GET['password'])){
        $msg = $_GET['password'];
        if ($msg=="error"){
            echo "<div class='alert alert-danger'>حساب کاربری وارد شده وجود ندارد.</div>";
        }
    }

    if(isset($_GET['register'])){
        $msg = $_GET['register'];
        if ($msg=="success"){
            echo "<div class='alert alert-success'>ثبت نام کامل شود. لطفا وارد اکانت شوید</div>";
        }
    }

}

// function posted($id, $title, $impression, $like, $action) {
//     $value = "<div class='row'>
//     <div class='col-md-6'>
//     <div class='post-title'>".$title."</div>
//     </div>
//     <div class='col-md-2'>
//     <div class='post-info'>".$impression." دیدار </div>
//     </div>
//     <div class='col-md-2'>
//     <div class='post-info'>".$like." لایک </div>
//     </div>
//     <div class='col-md-2'>
//     <a class='button' href='./".$action."/?id=".$id."'>".$action."</a>
//     </div>

//     </div>";
//     echo $value;
// }

function checkLoginStatus(){
    if(!isset($_SESSION['mailSession'])){
        echo "The Session is not set";
    }else {
        echo "The session is " . $_SESSION['mailSession']; 
    };
};
checkLoginStatus();





// Get User Information
function getUserInformation($getYourData){
    $dbConn = dbConnection();
    $userMailSession = $_SESSION['mailSession'];   
    
    $queryFindUserId = "SELECT * FROM users WHERE email = '$userMailSession' ";
    $queryResFindUserId = mysqli_query($dbConn, $queryFindUserId);
    $queryRowFindUserId = mysqli_fetch_assoc($queryResFindUserId);
    return $queryRowFindUserId[$getYourData];

};

// Show User Ads
function showUserAds(){
    $getUserId = getUserInformation("id");
    $dbConn = dbConnection();

    $queryUserAds = "SELECT * FROM ads WHERE userId = '$getUserId' ";
    $queryResUserAds = mysqli_query($dbConn, $queryUserAds);
    


    if(mysqli_num_rows($queryResUserAds)== 0){
        echo "<tr>
        <td>شما تا حالا هیچ آگهی ثبت نکرده اید! </td>
        <td>-</<td>
        <td>-</<td>
        <td>-</<td>
        <td>-</<td>
        </tr>
        ";
    }
    else{
       while($queryRowResUserAds = mysqli_fetch_array($queryResUserAds)) {
    
        echo "<tr>";
        echo "<th scope='row'>" . $queryRowResUserAds['adCode'] . "</th>";
        echo "<td>" . $queryRowResUserAds['adTitle'] . "</td>";
        echo "<td>" . $queryRowResUserAds['adDate'] . "</span></td>";
        echo "<td><span class='badge badge-warning p-2'>" . $queryRowResUserAds['adStatus'] . "</td>";
        echo "<td><a href='show-ad.php?adCode=" . $queryRowResUserAds['adCode'] . "'>نمایش آگهی</a></td>";

        echo "</<tr>";     
       }
    }
    
    
};

// Load a gravatar

function gravatar($email = '', $rating = 'pg') {
    $default = "../up/profile.png"; // Set a Default Avatar
    $email = md5(strtolower(trim($email)));
    $gravurl = "http://www.gravatar.com/avatar/$email";
    return '<img src="'.$gravurl.'" border="0" alt="Avatar" class="profile-picture">';
}

?>