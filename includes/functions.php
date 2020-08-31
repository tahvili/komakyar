<?php
    define('ABSPATH', TRUE);

    $url = $_SERVER['SERVER_NAME'];
    var_dump($_SERVER);

function page_title() {
	return ("<title>blub</title>");
}

function menu() {
	include $url . '/includes/menu.php';
}

function main_sponsor() {
    include $url . '/includes/sponsor.php';
}

function get_header($state) {
    include $url . '/includes/header.php';
    if ($state=="transparent"){
        echo "<link rel='stylesheet' id='style-css' href=' . $url . '/assets/css/transparent.css' media='all' />";
    }
}

function get_footer() {
    include $url . '/includes/footer.php';
}
?>