<?php
function userRegister ($userRegisterName, $userRegisterLastName, $userRegisterEmail, $userRegisterPhone, $userRegisterPassword) {

    $dbConn = dbConnection();
    $userRegisterPassword = md5($userRegisterPassword);

    $queryUserRegister = "INSERT INTO users (name,lastName,email,phone,password,userStatus) VALUES ('$userRegisterName','$userRegisterLastName','$userRegisterEmail','$userRegisterPhone','$userRegisterPassword',1)";


    if(mysqli_query($dbConn, $queryUserRegister)) {
        $_SESSION["userEmail"] = $userRegisterEmail;
        header('Location: ../../../app/index.php?register=success');
    }

    else {
        alert("یک خطای سیستمی رخ داد", "error");
    }

};

?>