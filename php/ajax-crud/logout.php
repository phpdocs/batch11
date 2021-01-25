<?php
    //Destroy the Session
    session_start();
    session_unset();
    session_destroy();

    //Empty the Cookies
    setcookie("UserName","",0,"/");
    setcookie("UserID","",0,"/");
    
    header("Location:login.php");

?>