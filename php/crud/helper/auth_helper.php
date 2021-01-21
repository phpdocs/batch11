<?php 
    //Verify Auth
    session_start();
    if(isset($_SESSION['UserName']) && isset($_COOKIE['UserName'])){
        if( empty($_SESSION['UserName']) OR empty($_SESSION['UserID']) OR
            empty($_COOKIE['UserID']) OR empty($_COOKIE['UserName']) OR
            $_SESSION['UserName']!=$_COOKIE['UserName'] OR 
            $_SESSION['UserID']!=$_COOKIE['UserID']
        ){
            header("Location:login.php");    
        }
    }else{
        header("Location:login.php");
    }
?>