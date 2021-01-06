<?php
    /**
     *  Topic: Arithmetic Operators
     *  Author: Muhammad Afzal
     *  Class: e-Rozgaar Batch#11
     *  Date: 6th Jan 2021
     */

     //Define Variables
     $a=10.00;
     $b=10.00;

     //Define Constants
     define("BR","<br />");

     if($a===$b)
        echo 'TRUE'.BR;
    else
        echo 'FALSE'.BR;



/*
    $a=20+30-50*100/10+30
    20+30-500+30
    Result=-420

    $b=(20+((30-50)*100))/(10+30)

    $b=(20+(-20*100))/40
    $b=(20+(-2000))/40
    $b=-1980/40
    $result=-49.5
*/

?>