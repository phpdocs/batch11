<?php
        $Message="";
        $txtUserID=0;
        $txtUserName="";
        $txtED=1;
        require_once("db_helper.php");

        //Capture User Delete Request and Process

        if(isset($_REQUEST['Ops'])){

            $Ops=check_input($_REQUEST['Ops']);
            $UserID=check_input($_REQUEST['UserID']);
            //For Delete
            if($Ops=="Delete"){
                $UserDeleteQuery="DELETE FROM users WHERE User_ID=$UserID";
                if(Query($conn,$UserDeleteQuery)){
                    $Message="Your User Has been Deleted Successfully.";
                }else{
                    $Message="Error".$conn->error;
                    CloseConn($conn);
                }
                echo $Message;
            }
            //For Edit
            if($Ops=="Edit"){
                $UserSelectQuery="SELECT User_Name,User_ED FROM users WHERE User_ID=$UserID";
                OpenConn($conn);
                $UserResult=$conn->query($UserSelectQuery);
                if($UserResult->num_rows>0){
                    $row=$UserResult->fetch_assoc();
                    $txtUserID=$UserID;
                    $txtUserName=$row['User_Name'];
                    $txtED=$row['User_ED'];

                }else{
                    $Message="No Record Found Regarding That User.";
                }

            }
        }

        //User Form Submission Process
        if(isset($_POST['btnUserSubmit'])){ //If Form has been Submitted
            $UserID=check_input($_POST['txtUserID']);
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

            if(empty($Message) && $UserID==0){ //Proceed to Database Storage

                $InsertQuery="INSERT INTO users (User_Name,User_Password,User_ED) ";
                $InsertQuery.=" VALUES ('$Username',md5('$Password'),'$ED')";

                //Now Proceed with DB Ops
                if(Query($conn,$InsertQuery)){
                    $Message="User has been Saved Successfully.";
                }else{
                    $Message="Sorry Unable to save User. Please try Again.".$conn->error;
                    CloseConn($conn);
                }
            }else{ //Send The Data for Update
                $UpdateQuery="UPDATE users SET User_Name='$Username',User_Password=md5('$Password'),User_ED='$ED' WHERE User_ID=$UserID";
                if(Query($conn,$UpdateQuery)){
                    $Message="User Has been Updated Successfully.";
                }else{
                    $Message="Error: ".$conn->error;
                    CloseConn($conn);
                }
            }
            
        }

        if(isset($_GET['LoadUsers'])){
            //Fetch Users List from DB to Display Records
            $SelectUserQuery="SELECT User_ID,User_Name,User_ED,User_Creation FROM users";
            OpenConn($conn);
            $result=$conn->query($SelectUserQuery);
            CloseConn($conn);
        }
        

    ?>