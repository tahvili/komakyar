<?php
    
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

function newsletter() {
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/newsletter.php';
}

function ads($company, $title, $description, $phone, $address, $instagram, $facebook, $website) {
    $value = "<div class='col-md-6'><div class='ad'>
    <h4>".$company."</h4><br><p><b>".$title."</b></p><br><p>".$description."</p><br>
    <ul><li><img src='../assets/img/phone.svg' alt='Phone Number'><a href='tel:".$phone."'>".$phone."</a></li>
    <li><img src='../assets/img/pin.svg' alt='Location'><a href='https://www.google.com/maps/place/".$address."'>".$address."</a></li>
    <li><img src='../assets/img/instagram.svg' alt='Instagram'><a href='https://instagram.com/".$instagram."'>".$instagram."</a></li>
    <li><img src='../assets/img/facebook.svg' alt='Facebook'><a href='https://www.facebook.com/".$instagram."'>".$facebook."</a></li>
    <li><img src='../assets/img/pc.svg' alt='Website'><a href='//".$website."'>".$website."</a></li></ul>
    </div></div>";
    echo $value;
}

function posted($id, $title, $impression, $like, $action) {
    $value = "<div class='row'>
    <div class='col-md-6'>
    <div class='post-title'>".$title."</div>
    </div>
    <div class='col-md-2'>
    <div class='post-info'>".$impression." دیدار </div>
    </div>
    <div class='col-md-2'>
    <div class='post-info'>".$like." لایک </div>
    </div>
    <div class='col-md-2'>
    <a class='button' href='./".$action."/?id=".$id."'>".$action."</a>
    </div>

    </div>";
    echo $value;
}

?>