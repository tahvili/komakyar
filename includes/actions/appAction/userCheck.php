<?php
function userCheck(){
     if (empty($_SESSION["userEmail"])){
        header('Location: ../../../app/login.php?login=required');
     } 
};
userCheck();
?>