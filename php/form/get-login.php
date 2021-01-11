<?php
    if(isset($_GET['btnSubmit'])){
        $Username=$_GET['txtUserName'];
        $Password=$_GET['txtPassword'];
    
        echo "Your UserName=".$Username."<br />";
        echo "Your Password=".$Password."<br />";
    }else{
        echo 'Wrong Page';
    }
    
?>