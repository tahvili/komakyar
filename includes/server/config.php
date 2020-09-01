<?php
function dbConnection() {
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "komakyar";
    $conn = mysqli_connect($dbServer, $dbUser, $dbPassword, $dbName);
    mysqli_set_charset($conn,'utf8');

    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }else {
        return $conn;
    }
};
?>