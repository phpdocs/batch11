<?php
    /**
     *  Topic: Functions
     *  Author: Muhammad Afzal
     *  Class: e-Rozgaar Batch#11
     *  Date: 8th Jan 2021
     */

     //Define Constants
     define("BR","<br />");

     //Simple Function
     function Greetings(){
         echo "Welcome to e-Rozgaar Batch#11".BR;
     }

     //Calling the Simple Function
     Greetings();

     //Function with Params
     function GreetingsP($name){
         echo "Welcome ".$name." To e-Rozgaar Batch#11".BR;
     }

     GreetingsP("Afzal");

     //Function With Multiple Params
     function Power($value1,$value2){
         echo $value1**$value2.BR;
     }

     Power(3,3);

     //Function With Multiple Params and Return Value
     function PowerR($value1,$value2){
         return $value1**$value2;
     }

     //Mod Function
     function Mod($value1,$value2){
         return $value1%$value2;
     }


     //Equation 5^117mod19
     $result=Mod(PowerR(5,117),19);
     echo "Result of Equation 5^117mod19=".$result.BR;


     //Function with Pass By Ref Params
     function PassByRef(&$value){
        ++$value;
     }


     $counter=1;
     PassByRef($counter);
     echo $counter.BR;
     $counter=7;
     PassByRef($counter);
     echo $counter.BR;
     
?>