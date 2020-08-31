<?php
    define('ABSPATH', TRUE);

function page_title() {
	return ("<title>blub</title>");
}

function menu() {
	include './includes/menu.php';
}

function main_sponsor() {
    include './includes/sponsor.php';
}

function get_header($state) {
    include './includes/header.php';
    if ($state=="transparent"){
        echo "<link rel='stylesheet' id='style-css' href='./assets/css/transparent.css' media='all' />";
    }
}

function get_footer() {
    include './includes/footer.php';
}
?>