<?php
    /**
     *  Topic: Form Validation
     *  Author: Muhammad Afzal
     *  Class: e-Rozgaar Batch#11
     *  Date: 12th Jan 2021
     */
    define("BR","<br />");
    $Message="";
    if(isset($_POST['btnSend'])){
        $Name=check_input($_POST['txtName']);
        $FatherName=check_input($_POST['txtFatherName']);
        $Phone=check_input($_POST['txtPhone']);

        
        if(empty($Name) OR !preg_match("/^[a-zA-Z ]*$/",$Name))
            $Message="Please Enter Your Name".BR;
        if(empty($FatherName) OR !preg_match("/^[a-zA-Z ]*$/",$FatherName))
            $Message.="Please Enter Your Father Name".BR;
        if(empty($Phone))
            $Message.="Please Enter your Phone#".BR;

        //Send the Values to DB
        if(empty($Message)){
            //Proceed to Database
            $Message="Name=".$Name.BR;
            $Message.="Father Name=".$FatherName.BR;
            $Message.="Phone#".$Phone.BR;
            //$Message="Your Data Has been Stored in Database Successfully.".BR;
        }
        
    }

    function check_input($value){
        $value=trim($value); //Remove Unwanted Spaces
        $value=stripslashes($value);//Remove Slashes
        $value=htmlspecialchars($value); //Convert the Special Characters into HTML Codes
        return $value;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Validation</title>
</head>
<body>
    <?php if($Message!=""){ ?>
    <p><?php echo $Message; ?></p>
    <?php } ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        Name:<input type="text" name="txtName" required placeholder="Please Enter your Name" /> <br />
        Father Name:<input type="text" name="txtFatherName" required placeholder="Please Enter your Father Name"/><br />
        Phone#<input type="tel" name="txtPhone" required /><br />
        <input type="reset" value="Clear" />
        <input type="submit" Value="Send" name="btnSend" />

    </form>
</body>
</html>