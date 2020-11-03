<?php
function masterCheck(){
     if (empty($_SESSION["masterEmail"])){
        header('Location: ../../../master/login.php?login=required');
     } 
};
masterCheck();
?>