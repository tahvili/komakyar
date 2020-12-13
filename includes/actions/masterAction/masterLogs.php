<?php
function masterShowLogs(){
    $dbConn = dbConnection();
    $queryShowlogs = "SELECT * FROM logs";
    $queryShowlogs = mysqli_query($dbConn, $queryShowlogs);

    while ($queryRowShowShowlogs = mysqli_fetch_array($queryShowlogs)){
        echo "<tr>";
        echo "<th>" . $queryRowShowShowlogs['ip'] . "</th>";
        echo "<th>" . $queryRowShowShowlogs['email'] . "</th>";
        echo "<th>" . $queryRowShowShowlogs['time'] . "</th>";
        echo "<th>" . $queryRowShowShowlogs['browser'] . "</th>";
        echo "<th>" . ipData($queryRowShowShowlogs['ip']) . "</th>";
        echo "<th>" . $queryRowShowShowlogs['detail'] . "</th>";
        echo "</<tr>";  
    };
};

?>

