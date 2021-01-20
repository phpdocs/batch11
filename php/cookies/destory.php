<?php
    session_start();
    session_unset();
    session_destroy();


    setcookie("UserName","",0,"/");
    setcookie("UserID","",0,"/");
    setcookie("UserAuth","",0,"/");
?>