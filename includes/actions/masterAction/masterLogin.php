<?php
function masterLogin ($masterLoginEmail,$masterLoginPassword) {



if(empty($masterLoginEmail) & empty($masterLoginPassword)){
    alert("تمامی فید ها را تکمیل کنید.", "error");
}else {
    $dbConn = dbConnection();
    $masterLoginPassword = md5($masterLoginPassword);

    $queryMasterLogin = "SELECT * FROM users WHERE email = '$masterLoginEmail'  AND userAccess = 2" ;

    $queryResMasterLogin = mysqli_query($dbConn, $queryMasterLogin);
    $queryRowMasterLogin = mysqli_fetch_assoc($queryResMasterLogin) ;

    if($masterLoginEmail == $queryRowMasterLogin['email'] && $masterLoginPassword == $queryRowMasterLogin['password']) {
        $_SESSION["masterEmail"] = $queryRowMasterLogin['email'];
        header('Location: ../../master/index.php?login=success');
    }else {
        alert("نام کاربری و یا رمز عبور شما اشتباه است.", "error");
    };
}

};

?>