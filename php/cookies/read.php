<?php

    /**
     *  Topic: Session/Cookies in PHP
     *  Author: Muhammad Afzal
     *  Class: e-Rozgaar Batch#11
     *  Date: 20th Jan 2021
     */

    session_start();

    if(isset($_COOKIE['UserName']) && isset($_SESSION['UserName'])){
        
        //Verify the Cookies and Sessions Integrity
        if(
            $_SESSION['UserName']==$_COOKIE['UserName'] &&
            $_SESSION['UserID']==$_COOKIE['UserID'] &&
            $_SESSION['UserAuth']==$_COOKIE['UserAuth']
        ){
            echo "Congrats Your Session Has been Verified";
        }else{
            echo "You are not allowed to Visit That Page";
        }
    }else{
        echo "You are not allowed to Visit That Page";
    }