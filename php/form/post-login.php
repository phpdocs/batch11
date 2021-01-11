<?php
    define("BR","<br />");
    if(isset($_POST['btnSubmit'])){
        $UserName=$_POST['txtUserName'];
        $Password=$_POST['txtPassword'];

        echo 'Your UserName='.$UserName.BR;
        echo 'Your Password='.$Password.BR;
    }
?>