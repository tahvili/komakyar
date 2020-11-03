<?php
session_start();
// echo "My Session is " . @$_SESSION["userEmail"] ;
require_once 'config.php';

function get_header($pageTitle) {
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/sections/header.php';
}
function get_footer() {
    include $_SERVER['DOCUMENT_ROOT'] . '/includes/sections/footer.php';
}

function alert($alertMessage,$alertType){
    echo "<script>
    const Toast = Swal.mixin({
    toast: true,
    position: 'bottom-end',
    showConfirmButton: false,
    timer: 3200,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer);
        toast.addEventListener('mouseleave', Swal.resumeTimer);
    }
    });
    Toast.fire({";
        echo "icon:'" . $alertType . "'";        
        echo ",title:'" . $alertMessage . "'";
    echo "});
    </script>"
    ;
;}

 
  
