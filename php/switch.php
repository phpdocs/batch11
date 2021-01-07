<?php

    /**
     *  Topic: Switch
     *  Author: Muhammad Afzal
     *  Class: e-Rozgaar Batch#11
     *  Date: 7th Jan 2021
     */


     //Define Constant
     define("BR","<br />");

     $Grade="d";

     //Switch Statement to Get the Marks Range
     switch(strtoupper($Grade)){
         case "A+":
            echo "85-100".BR;
            break;
         case "A":
            echo "80-84".BR;
            break;
         case "B+":
            echo "75-79".BR;
            break;
         case "B":
            echo "70-74".BR;
            break;
         case "C+":
            echo "65-69".BR;
            break;
         case "C":
            echo "60-64".BR;
            break;
         case "D":
            echo "55-59".BR;
            break;
         case "E":
            echo "50-54".BR;
            break;
         default:
            echo "0-49".BR;
            break;
     }


?>