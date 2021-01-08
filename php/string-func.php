<?php
    
    /**
     *  Topic: Functions
     *  Author: Muhammad Afzal
     *  Class: e-Rozgaar Batch#11
     *  Date: 8th Jan 2021
     */

     //Define Constants
     define("BR","<br />");

     $Password="MyPassword";
     $Enc=md5($Password);
     echo $Enc.BR;
     
     
     $REnc=strrev($Enc);
     echo $REnc.BR;


     //For Auth
     $OEnc=strrev($REnc);
     echo $OEnc.BR;
     if(md5("MyPassword")==$OEnc){
         echo "Auth True".BR;
     }else{
         echo "Auth False".BR;
     }