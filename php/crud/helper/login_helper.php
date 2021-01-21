<?php
        $LoginMessage="";
        //If Login Form Submit
        if(isset($_POST['btnLogin'])){
            require_once("helper/db_helper.php");
            $UserName=check_input($_POST['txtUserName']);
            $Password=check_input($_POST['txtPassword']);

            if(empty($UserName))
                $LoginMessage="Please Enter UserName.<br />";
            if(empty($Password)){
                $LoginMessage.="Please Enter Password.";
            }

            if(empty($LoginMessage)){ //Proceed With Database Verification
                $LoginQuery="SELECT User_ID FROM Users WHERE User_Name='$UserName' AND User_Password=md5('$Password') AND User_ED=1";
                OpenConn($conn);
                $Result=$conn->query($LoginQuery);
                CloseConn($conn);

                if($Result->num_rows>0){
                    $row=$Result->fetch_assoc();
                    if($row['User_ID']>0){
                        //Create Session
                        session_start();
                        $_SESSION['UserName']=$UserName;
                        $_SESSION['UserID']=$row['User_ID'];
                        //Create Cookies
                        setcookie("UserName",$UserName,time()+86400,"/");
                        setcookie("UserID",$row['User_ID'],time()+86400,"/");

                        //Redirect the Page to Index.php
                        header("Location:index.php");
                        
                    }else{
                        $LoginMessage="Invalid Login Details.Please Try Again";    
                    }
                }else{
                    $LoginMessage="Invalid Login Details.Please Try Again";
                }
            }

        }
    ?>