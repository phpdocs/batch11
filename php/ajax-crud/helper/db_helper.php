<?php
require_once("db_constants.php");
$conn="";

//Proc Methods
function POpenConn(&$conn){
     //Procedural MySQLi Methods
     $conn=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);
     
     if(!$conn){
          die("Unable to Connect to MySQLi".mysqli_connect_error());
     }
}

function OCloseConn(&$conn){
     mysqli_close($conn);
}

//Object Oriented Methods
function OpenConn(&$conn){
     //Connection Open
     $conn=new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);
     //Verify the Connection
     if($conn->connect_error){
     die("Error:".$conn->connect_error);
     }
}

function CloseConn(&$conn){
     //Close the MySQLI Connection
     $conn->close();
}

function Query(&$conn,$query){
     //Open Connection
     OpenConn($conn);

     $result=$conn->query($query);

     if($result===true){
          //Close Connection
          CloseConn($conn);
          return true;
     }else{
         return false;
     }
}

function check_input($value){
     $value=trim($value); //Remove Unwanted Spaces
     $value=stripslashes($value);//Remove Slashes
     $value=htmlspecialchars($value); //Convert the Special Characters into HTML Codes
     return $value;
 }
 
?>