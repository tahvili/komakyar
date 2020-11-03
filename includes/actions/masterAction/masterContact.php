<?php
function masterContact(){
    $dbConn = dbConnection();

    $queryShowInbox = "SELECT * FROM contact ORDER BY date DESC";
    $queryResShowInbox = mysqli_query($dbConn, $queryShowInbox);

    while ($queryRowShowInbox = mysqli_fetch_array($queryResShowInbox)){
        echo "<tr>";
        echo "<th>" . $queryRowShowInbox['fullName'] . "</th>";
        echo "<th>" . $queryRowShowInbox['subject'] . "</th>";
        echo "<th>" . $queryRowShowInbox['date'] . "</th>";
        echo "<td><a class='btn btn-komakyar-sm btn-sm' href='show-user.php?infoxId=" . $queryRowShowInbox['id'] . "'>نمایش پیام</a></td>";

        echo "</<tr>";  
    };

};
?>