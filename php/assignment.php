<?php
     /**
     *  Topic: Assignment Operators
     *  Author: Muhammad Afzal
     *  Class: e-Rozgaar Batch#11
     *  Date: 5th Jan 2021
     */


     #Define BR Constant
     define("BR","<br />");

     //Declare Variables
     $a=20;
     $b=10;

     
     echo "Value of a=".$a.BR;
     echo "Value of b=".$b.BR;

    //Basic Assignment Operation
     $a=$b;
     echo "After Basic Assignment Value of a=b =".$a.BR;

    //Addition
    echo "Value of a=".$a.BR;
    echo "Value of b=".$b.BR;
    $a+=$b;
    echo "After Addition Assignment Value of a+=b =".$a.BR;

    //Subtraction
    echo "Value of a=".$a.BR;
    echo "Value of b=".$b.BR;
    $a-=$b;
    echo "After Subtraction Assignment Value of a-=b =".$a.BR;

    //Multiply
    echo "Value of a=".$a.BR;
    echo "Value of b=".$b.BR;
    $a*=$b;
    echo "After Multiply Assignment Value of a*=b =".$a.BR;

    //Division
    echo "Value of a=".$a.BR;
    echo "Value of b=".$b.BR;
    $a/=$b;
    echo "After Division Assignment Value of a/=b =".$a.BR;


    //Products Fetched From DB 18
    //Row =4

    //Mod/Reminder
    $value1=33;
    $value2=5;
    $value1%=$value2;
    echo "Reminder of 33%2= ".$value1;

    echo BR.BR.BR.BR;

?>