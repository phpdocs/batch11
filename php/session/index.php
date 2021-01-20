<?php
    session_start();
    $_SESSION['UserName']="afzal786";
    $_SESSION['UserID']=20;
    $_SESSION['Auth']=true;
    /**
     *  Topic: Session/Cookies in PHP
     *  Author: Muhammad Afzal
     *  Class: e-Rozgaar Batch#11
     *  Date: 20th Jan 2021
     */

    echo "<pre>";
    echo print_r($_SESSION);
    echo "</pre>";

    
