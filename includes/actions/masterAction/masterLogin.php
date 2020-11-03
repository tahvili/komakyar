<?php
function masterLogin ($masterLoginEmail,$masterLoginPassword,$masterLoginCode,$secret) {



if(empty($masterLoginEmail) & empty($masterLoginPassword) & empty($masterLoginCode)){
    alert("تمامی فید ها را تکمیل کنید.", "error");
}else {
    $ga = new authenticator();
    $checkResult = $ga->verifyCode($secret, $masterLoginCode, 2);    // 2 = 2*30sec clock tolerance
    if (!$checkResult) {
        $dbConn = dbConnection();
        $masterLoginPassword = md5($masterLoginPassword);
    
        $queryMasterLogin = "SELECT * FROM users WHERE email = '$masterLoginEmail'  AND userAccess = 2" ;
    
        $queryResMasterLogin = mysqli_query($dbConn, $queryMasterLogin);
        $queryRowMasterLogin = mysqli_fetch_assoc($queryResMasterLogin) ;
    
        if($masterLoginEmail == $queryRowMasterLogin['email'] && $masterLoginPassword == $queryRowMasterLogin['password']) {
            $_SESSION["masterEmail"] = $queryRowMasterLogin['email'];
            header('Location: ../../../master/index.php?login=success');
        }else {
            alert("نام کاربری و یا رمز عبور شما اشتباه است.", "error");
        };
    } else {
        alert("رمز یکبار مصرف شما اشتباه است.", "error");
    }
}

};

?>