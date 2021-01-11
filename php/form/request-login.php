<?php

    define("BR","<br />");

    if(isset($_REQUEST['btnSubmit'])){
        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";

        /*$UserName=$_REQUEST['txtUserName'];
        $Password=$_REQUEST['txtPassword'];

        echo 'Your UserName='.$UserName.BR;
        echo 'Your Password='.$Password.BR;*/
    }

?>