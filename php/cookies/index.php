<?php
    /**
     *  Topic: Session/Cookies in PHP
     *  Author: Muhammad Afzal
     *  Class: e-Rozgaar Batch#11
     *  Date: 20th Jan 2021
     */
    $UserName="afzal786";
    $UserID=20;
    $UserAuth=true;

    //Set Session Values
    session_start();
    $_SESSION['UserName']=$UserName;
    $_SESSION['UserID']=$UserID;
    $_SESSION['UserAuth']=$UserAuth;

    //Set Cookies
    setcookie("UserName",$UserName,time()+86400,"/");
    setcookie("UserID",$UserID,time()+86400,"/");
    setcookie("UserAuth",$UserAuth,time()+86400,"/");

