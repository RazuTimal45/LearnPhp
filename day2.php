<?php

//correct way to declare variables in php
   $myVar = 5;
   $my_var = 3;
   $myvar = 1;
   $_myvar = 6;
 



   //concatenation
   $first = "Raju";
   $second = "Timalsina";

   echo "Hello ".$first." ".$second;



   //datatypes

   // 1)string
   // 2)integer
   // 3)float
   // 4)boolean
   // 5)array
   // 6)Object
   // 7)null
   // 8)Resource


   $var1 = "Rabina"; //string
   $var3 = (string) 5; //integer
   $var4 = 5.3; //float
   $var2 = true; //boolean
   $var5Arr = ['rabina','raju']; //Array
   $var7Arr = Array('rabina','raju'); //Array
   $var6Arr = [1,2,34]; //Array
   $var = null;//Null

    //var_dump
    print(var_dump($var1));

    //type casting
    print(var_dump($var3));

    

    //Math function
    echo(pi());
    $var10 = -23;
    echo(abs($var10));

    echo(sqrt(81));


    echo(pi()*5*5);
   

    //constant declaration
    define("RAJU",'rabina');
    echo RAJU;

    //magic constants
    // __CLASS__ ==> class name is return
    // __DIR__ ==> directory of file
    // __FUNCTION__ ==> function name is returned
    // __LINE__ ==> current line number
    // __METHOD__ ==> used inside function that belongs to class
    // __NAMESPACE__ ==> used inside namespace
    // __TRAIT__ ==> used  inside trait

?>