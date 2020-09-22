<?php
function dbConnection() {
     $dbServer = "localhost";
     $dbUser = "root";
     $dbPassword = "";
     $dbName = "komakyar";
    // $dbServer = "174.142.247.164";
    // $dbUser = "komakyar_manager";
    // $dbPassword = "pmM^zF7kT,p#";
    // $dbName = "komakyar_newdb";
    $conn = mysqli_connect($dbServer, $dbUser, $dbPassword, $dbName);
    mysqli_set_charset($conn,'utf8');

    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }else {
        return $conn;
    }
};
?>