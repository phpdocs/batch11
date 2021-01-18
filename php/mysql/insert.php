<?php
    /**
     *  Topic: PHP/MySQL Insert
     *  Author: Muhammad Afzal
     *  Class: e-Rozgaar Batch#11
     *  Date: 18th Jan 2021
     */
    
     //Call DB Contants
     require_once("db_helper.php");

     //Open the Connection
     OpenConn($conn);
     
     //Prepare the Insert Query
     $UserName="kaleem123";
     $Password="temp123";
     $InsertQuery="INSERT INTO users (User_Name,User_Password) VALUES ('".$UserName."','".$Password."')";
     
     $result=$conn->query($InsertQuery);
     if($result===true){
         echo "Your Record Has been Saved Sucessfully.";
     }else{
         
         echo 'Erro:'.$conn->error;
     }
     
     //Close the Connection
     CloseConn($conn);

?>