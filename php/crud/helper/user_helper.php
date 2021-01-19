<?php
        $Message="";
        require_once("db_helper.php");

        //Capture User Delete Request and Process

        if(isset($_GET['Ops'])){

            $Ops=check_input($_GET['Ops']);
            $UserID=check_input($_GET['UserID']);
            //For Delete
            if($Ops=="Delete"){
                $UserDeleteQuery="DELETE FROM users WHERE User_ID=$UserID";
                if(Query($conn,$UserDeleteQuery)){
                    $Message="Your User Has been Deleted Successfully.";
                }else{
                    $Message="Error".$conn->error;
                    CloseConn($conn);
                }
            }
            //For Edit
            if($Ops=="Edit"){
            }
        }

        //User Form Submission Process
        if(isset($_POST['btnUserSubmit'])){ //If Form has been Submitted
            $Username=check_input($_POST['txtUserName']);
            $Password=check_input($_POST['txtPassword']);
            $RePassword=check_input($_POST['txtRePassword']);
            $ED=0;
            if(isset($_POST['txtED'])){
                $ED=check_input($_POST['txtED'])=='on'?1:0;
            }
            

            //Validate the Fields
            if(empty($Username))
                $Message="Please Enter UserName.<br />";
            if(empty($Password) || $Password!=$RePassword)
                $Message.="Please Enter Password.<br />";

            if(empty($Message)){ //Proceed to Database Storage

                $InsertQuery="INSERT INTO users (User_Name,User_Password,User_ED) ";
                $InsertQuery.=" VALUES ('$Username','$Password','$ED')";

                //Now Proceed with DB Ops
                if(Query($conn,$InsertQuery)){
                    $Message="User has been Saved Successfully.";
                }else{
                    $Message="Sorry Unable to save User. Please try Again.".$conn->error;
                    CloseConn($conn);
                }
            }
            
        }

        //Fetch Users List from DB to Display Records
        $SelectUserQuery="SELECT User_ID,User_Name,User_ED,User_Creation FROM users";
        OpenConn($conn);
        $result=$conn->query($SelectUserQuery);
        CloseConn($conn);

    ?>