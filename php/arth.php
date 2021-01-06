<?php
    /**
     *  Topic: Arithmetic Operators
     *  Author: Muhammad Afzal
     *  Class: e-Rozgaar Batch#11
     *  Date: 6th Jan 2021
     */

     //Define Variables
     $a=23;
     $b=10;
     $c=0;

     //Define Constants
     define("BR","<br />");

     //Print Org Values
     echo "\$a=".$a.BR;
     echo "\$b=".$b.BR;

     //Addition
     $c=$a+$b;
     echo 'Addition of $a+$b='.$c.BR;

     //Subtraction
     $c=$a-$b;
     echo 'Subtraction of $a-$b='.$c.BR;

     //Multiply 
     $c=$a*$b;
     echo 'Multiply of $a*$b='.$c.BR;

     //Division
     $c=$a/$b;
     echo 'Division of $a/$b='.$c.BR;

     //Mod
     $c=$a%$b;
     echo 'Mod of $a%$b='.$c.BR;

     //Exponent or Power
     $c=2**13;
     echo "Power of 2^13=".$c.BR;


?>