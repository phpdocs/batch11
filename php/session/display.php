<?php

    session_start();
    if(isset($_SESSION['Auth'])){
        echo $_SESSION['UserName']."<br />";
        echo $_SESSION['UserID']."<br />";
        echo $_SESSION['Auth']."<br />";
    }else{
        echo "You are not allowed to see any data.";
    }
    
?>