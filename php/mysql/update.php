<?php
    /**
     *  Topic: PHP/MySQL Update
     *  Author: Muhammad Afzal
     *  Class: e-Rozgaar Batch#11
     *  Date: 18th Jan 2021
     */


    //Define SQL Server Constants
    define("DB_SERVER","localhost");
    define("DB_USER","root");
    define("DB_PASS","");
    define("DB_DATABASE","ecom-11");

    //Open the Connection
    $conn=new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);

    //Incase of Error
    if($conn->connect_error){
        die("Error:".$conn->connect_error);
    }


    //Prepare the Update Query
    $NewUserName="Sheroz123";
    $User_ID=6;
    $UpdateQuery="UPDATE users SET User_Name='".$NewUserName."' WHERE User_ID=".$User_ID;
    
    $result=$conn->query($UpdateQuery);
    if($result===true){
        echo "Record has been Updated Sccessfully.";
    }else{
        echo 'Error:'.$conn->error;
    }
    
    //Close Connection
    $conn->close();