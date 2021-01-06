<?php
    /**
     *  Topic: Loops
     *  Author: Muhammad Afzal
     *  Class: e-Rozgaar Batch#11
     *  Date: 6th Jan 2021
     */

     //Define Constant
     define("BR","<br />");

     //For Loop
     for($a=1;$a<=10;$a++){
         echo $a.BR;
     }

     //I want to Print Only Even Numbers
     // From 1 to 20
     echo "Even Numebrs".BR;
     for($a=0;$a<=20;$a+=2){
         echo $a.",";
     }

     //Loop in Revers
     echo BR."loop in Reverse".BR;
     for($a=10;$a>=0;$a--){
         echo $a.",";
     }

     echo "While Loop".BR;
     //While Loop
     $counter=0;
     while($counter<10){
         echo $counter.BR;
         ++$counter;
     }

     echo "Do-While Loop".BR;
     //do-While Loop
     $counter=0;
     do{
        echo $counter.BR;
        ++$counter;
     }while($counter<10)

?>