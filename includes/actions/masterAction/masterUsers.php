<?php
function masterUsers(){
    $dbConn = dbConnection();

    $queryShowUsers = "SELECT * FROM users ORDER BY registerDate DESC";
    $queryResShowUsers = mysqli_query($dbConn, $queryShowUsers);

    while ($queryRowShowUsers = mysqli_fetch_array($queryResShowUsers)){
        echo "<tr>";
        echo "<th>" . $queryRowShowUsers['name'] . "</th>";
        echo "<th>" . $queryRowShowUsers['lastName'] . "</th>";
        echo "<th>" . $queryRowShowUsers['email'] . "</th>";
        echo "<th>" . $queryRowShowUsers['phone'] . "</th>";
        echo "<td><a class='btn btn-komakyar-sm btn-sm' href='show-user.php?userId=" . $queryRowShowUsers['id'] . "'>نمایش کاربر</a></td>";

        echo "</<tr>";  
    };

};
?>