<?php 
    $username = $_GET['user_name'];
    if(!isset($_SESSION[$username])){
        echo "session is activate";
        session_destroy();
        header('location:login.php');
    }

    else{
        echo "session is destroyed";
        session_destroy();
        header('location:login.php');
    }
?>