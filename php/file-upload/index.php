<!DOCTYPE html>
<html lang="en">
<head>
    <title>File Upload</title>
</head>
<body>

<?php
    /**
     *  Topic: File Upload
     *  Author: Muhammad Afzal
     *  Class: e-Rozgaar Batch#11
     *  Date: 12th Jan 2021
     */
    define("BR","<br />");
     if(isset($_POST['btnUpload'])){
         $name=$_FILES['txtStudentPicture']['name'];
         //echo "File Orignal Name=".$name.BR;
         //echo "File Temp Name=".$_FILES['txtStudentPicture']['tmp_name'].BR;
         //echo "File Type=".$_FILES['txtStudentPicture']['type'].BR;
         //echo "File Size=".$_FILES['txtStudentPicture']['size'].BR;

         $type=$_FILES['txtStudentPicture']['type'];
         $size=($_FILES['txtStudentPicture']['size'])/1024; //Size in KB

         if($type=="image/png" || $type=="image/jpeg" || $type=="image/jpg" || $type=="image/gif"){
            if($size<=100){
                //File Upload to Org Destination 
                if(move_uploaded_file($_FILES['txtStudentPicture']['tmp_name'],'uploads/'.$name)){
                    echo "File Has been Uploaded Successfully.";
                }else{
                    echo "Sorry there is an issue with your File Upload. Please try again.";
                }
            }else{
                echo "Please Upload image which is Less then or Equal to 100KB.".BR;
            }
         }else{
             echo "Please Upload Image File.".BR;
         }

         
         
     }
?>


    <form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="txtStudentPicture" />
    <input type="Submit" value="Upload" name="btnUpload" />
    </form>
</body>
</html>