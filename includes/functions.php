<?php
    define('ABSPATH', TRUE);

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
?>