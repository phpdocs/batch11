<?php
    /**
     *  Topic: Loop
     *  Author: Muhammad Afzal
     *  Class: e-Rozgaar Batch#11
     *  Date: 7th Jan 2021
     */

     //Define Constant
     define("BR","<br />");

     $colors=array("Black","White","Green","Yellow");
     echo $colors[0].BR;
     echo $colors[1].BR;
     echo $colors[2].BR;
     echo $colors[3].BR;

     //Print the Array Using Loop
     for($a=0;$a<4;$a++){
         echo $colors[$a].BR;
     }

     //Define the Array with Custom Index
     $fruit[100]="Apple";
     $fruit[101]="Orange";
     $fruit[102]="Mango";
     $fruit[103]="Graps";
     echo BR;
     //Print the Custom Index Array
     for($a=100;$a<104;$a++){
         echo $fruit[$a].BR;
     }


     //Assoc Arrays
     $Emp=array("Qasim","Kashif","Abbas","Asif");
     $Salary=array("Asif"=>40000,"Qasim"=>20000,"Kashif"=>25000,"Abbas"=>30000);
     $Location=array("Qasim"=>"Sargodha","Asif"=>"Islamabad","Kashif"=>"Karachi","Abbas"=>"Lahore");

     for($a=0;$a<4;$a++){
         $EmpName=$Emp[$a];
         echo "Employee Name=".$EmpName." Salary P/M=".$Salary[$EmpName]." Location=".$Location[$EmpName].BR;
     }

     echo BR;
     $GrandSalary=0;
     $Counter=1;
     foreach($Salary as $name=>$amount){
         echo "#".$Counter." ".$name." Takes ".$amount." Salary P/M".BR;
         $GrandSalary+=$amount;
         $Counter++;
     }
     echo "Total Salary=".$GrandSalary.BR;


?>