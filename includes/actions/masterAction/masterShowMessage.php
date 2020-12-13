<?php
function masterShowMessage($messageId){
    $dbConn = dbConnection();
    $queryShowMessage = "SELECT * FROM contact WHERE id = '$messageId' ";
    $queryResqueryShowMessage = mysqli_query($dbConn, $queryShowMessage);
    return mysqli_fetch_assoc($queryResqueryShowMessage);
    
};

?>