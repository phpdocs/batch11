<?php
    /**
     *  Topic: PHP/MySQL Delete
     *  Author: Muhammad Afzal
     *  Class: e-Rozgaar Batch#11
     *  Date: 18th Jan 2021
     */

    require_once("db_helper.php");


    //Prepare the Update Query
    $User_ID=2;
    $DeleteQuery="DELETE FROM users WHERE User_ID=".$User_ID;

    if(Query($conn,$DeleteQuery)){
        echo "Successfully Executed";
    }else{
        echo $conn->error;
        CloseConn($conn);
    }