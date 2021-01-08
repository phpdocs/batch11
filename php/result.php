<?php
    /**
     *  Topic: Students Result Procedure
     *  Author: Muhammad Afzal
     *  Class: e-Rozgaar Batch#11
     *  Date: 8th Jan 2021
     */

     //Define Constants
     define("BR","<br />");

    $result=array(
        "BSIT09E101"=>array("Name"=>"Muhammad Afzal","Intro to CS"=>80,"DataBase"=>75,"Networks"=>65,"Crypto"=>90),
        "BSIT09E102"=>array("Name"=>"Asif Khan","Intro to CS"=>90,"DataBase"=>70,"Networks"=>75,"Crypto"=>55),
        "BSIT09E103"=>array("Name"=>"Kashif","Intro to CS"=>85,"DataBase"=>80,"Networks"=>48,"Crypto"=>63),
        "BSIT09E104"=>array("Name"=>"Imran Khan","Intro to CS"=>79,"DataBase"=>55,"Networks"=>80,"Crypto"=>51)
    );
?>
<table border=1 cellpadding="5" cellspacing="0">
    <tr>
        <th>Roll#</th>
        <th>Name</th>
        <th>Intro To CS</th>
        <th>GPA</th>
        <th>DataBase</th>
        <th>GPA</th>
        <th>Networks</th>
        <th>GPA</th>
        <th>Crypto</th>
        <th>GPA</th>
    </tr>
<?php
    foreach($result as $rollnumber=>$resultarray){
        echo "<tr>";
        echo "<td>".$rollnumber."</td>";
        echo "<td>".$resultarray["Name"]."</td>";
        echo "<td>".$resultarray["Intro to CS"]."</td>";
        echo "<td>".CalcGPA($resultarray["Intro to CS"])."</td>"; //Call GPA Function
        echo "<td>".$resultarray["DataBase"]."</td>";
        echo "<td>".CalcGPA($resultarray["DataBase"])."</td>"; //Call GPA Function
        echo "<td>".$resultarray["Networks"]."</td>";
        echo "<td>".CalcGPA($resultarray["Networks"])."</td>";  //Call GPA Function
        echo "<td>".$resultarray["Crypto"]."</td>";
        echo "<td>".CalcGPA($resultarray["Crypto"])."</td>";//Call GPA Function
        echo "</tr>";
    }


     //Function for GPA Calculation
     function CalcGPA($SubjectMarks){
        if($SubjectMarks>=85){
            return "4.00";
        }else if($SubjectMarks<85 AND $SubjectMarks>=80){
            return "3.75";
        }else if($SubjectMarks<80 AND $SubjectMarks>=75){
            return "3.50";
        }else if($SubjectMarks<75 AND $SubjectMarks>=70){
            return "3.00";
        }else if($SubjectMarks<70 AND $SubjectMarks>=65){
            return "2.50";
        }else if($SubjectMarks<65 AND $SubjectMarks>=60){
            return "2.00";
        }else if($SubjectMarks<60 AND $SubjectMarks>=55){
            return "1.50";
        }else if($SubjectMarks<55 AND $SubjectMarks>=50){
            return "1.00";
        }else{
            return "0.00";
        }
     }
