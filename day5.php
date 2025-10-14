<?php
   //Remaining Topic
   //Arrays,Superglobals,Regex

   //Arrays
   // Array is collection similar items. It always counts from 0. The index value starts from 0.

   // there are three types of Array 
   // i)  Indexed Array
   // ii) Associative Array
   // iii)Multi-dimensional Array


   // indexed array
   // index array is collection of similar items accessed using index value
   // $car = [0,1,2,3]
   // $car = ['bmw','ferrari','bugati','hyundai'];
   // echo $car[4];

   //Associative Array (key, value)
   // $car = array("brand"=>"ford","model"=>"2018","color"=>"black");

   // echo $car['model'];

   //multidimensional array

   // $students = array(
   //    array('raju',24,'bachelor old','zebra'),
   //    array('rabina',23,'bachelor new','monkey',56),
   //    array('lalita',20,'advance bachelor','cat')
   // );

   // echo $students[1][4];
   
   //super global variable
   // $GLOBALS 
   // $_SERVER
   // $_REQUEST
   // $_POST
   // $_GET
   // $_COOKIE
   // $_ENV
   // $_FILES
   // $_SESSION

   //Regex 
   // preg_match();

   // Raju = raju (case insensitive) //they are similar
   // Raju != raju (case sensitive) // they are different
   
   // $str = 'Visit Raju house';
   // $pattern = "/cat/i";
   // echo preg_match($pattern, $str)


?>