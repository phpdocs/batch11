<?php
    /**
     *  Topic: Loop
     *  Author: Muhammad Afzal
     *  Class: e-Rozgaar Batch#11
     *  Date: 7th Jan 2021
     */

     //Define Constant
     define("BR","<br />");

     

     $name=array("Afzal","Faisal","Kashif","Kamran");
     
     if(is_array($name)){ //Verify if it's Array or Not?
         if(count($name)>0){ //Count the Total Length of Array
            for($a=0;$a<count($name);$a++){
                echo $name[$a].BR;
            }
         }
     }


     $cars = array (
        "Volvo"=>array("Brand"=>"Volvo","InStock"=>22,"SoldOut"=>18),
        "BMW"=>array("Brand"=>"BMW","InStock"=>15,"SoldOut"=>13),
        "Saab"=>array("Brand"=>"Saab","InStock"=>5,"SoldOut"=>2),
        "LandRover"=>array("Brand"=>"Land Rover","InStock"=>17,"SoldOut"=>15)
      );
     //Print the Whole Array
     echo "<pre>";
     print_r($cars);
     echo "</pre>";