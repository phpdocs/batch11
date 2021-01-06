<?php

    /**
     *  Topic: Increment & Decrement Operators
     *  Author: Muhammad Afzal
     *  Class: e-Rozgaar Batch#11
     *  Date: 6th Jan 2021
     */

     //Define Variable
     $a=11;

     //Define Constant
     define("BR","<br />");

    echo "Original Value of \$a=".$a.BR;
     //Pre Increment
    echo "Pre Increment \$a=".++$a.BR;

    //Post Increment
    echo "Post Increment \$a=".$a++.BR;

    //Current Value of $a after Post Increment
    echo "Current Value of \$a After Post Increment=".$a.BR;

    //Pre Decrement
    echo "Pre Decrement \$a=".--$a.BR;

    //Post Decrement
    echo "Post Decrement \$a=".$a--.BR;

    //Current Value of $a after Post Decrement
    echo "Current Value of \$a After Post Decrement=".$a.BR;

?>