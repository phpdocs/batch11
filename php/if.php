<?php
    /**
     *  Topic: IF-Else-IF
     *  Author: Muhammad Afzal
     *  Class: e-Rozgaar Batch#11
     *  Date: 7th Jan 2021
     */

     //Define Constant
     define("BR","<br />");

     $day=date("D");
     $day=strtoupper($day);

     //If Friday then it's a Weekend
     if($day=="FRI"){
         echo "Have a Nice Weekend".BR;
     }else{
         echo "Have a Good Day".BR;
     }

     //Logical Conditions
     
     if($day=="FRI" OR $day=="SAT" OR $day=="SUN"){
         echo "Enjoy your Weekend".BR;
     }else{
         echo "Have a Good Day to Work".BR;
     }

     //Multiple IF Else Conditions
     $day="SUN";
     if($day=="FRI"){
         echo "Enjoy your Weekend".BR;
     }else if($day=="SAT"){
         echo "1 Day Left in Holidays".BR;
     }else if($day=="SUN"){
        echo "Last Day To Enjoy your Weekend".BR;
     }else{
         echo "Have a good Day to Work".BR;
     }

     //Assign CGPA to Subject

     $SubjectMarks=50;
     echo "Your Subject GPA=";
     if($SubjectMarks>=85){
         echo "4.00".BR;
     }else if($SubjectMarks<85 AND $SubjectMarks>=80){
         echo "3.75".BR;
     }else if($SubjectMarks<80 AND $SubjectMarks>=75){
         echo "3.50".BR;
     }else if($SubjectMarks<75 AND $SubjectMarks>=70){
         echo "3.00".BR;
     }else if($SubjectMarks<70 AND $SubjectMarks>=65){
         echo "2.50".BR;
     }else if($SubjectMarks<65 AND $SubjectMarks>=60){
         echo "2.00".BR;
     }else if($SubjectMarks<60 AND $SubjectMarks>=55){
         echo "1.50".BR;
     }else if($SubjectMarks<55 AND $SubjectMarks>=50){
         echo "1.00".BR;
     }else{
         echo "0.00".BR;
     }



?>