<?php
//JSON = javascript object notation for storing and exchanging data

//Json encode
// $age = array("Peter"=>35, "Ben"=>37,"Joe"=>43);

// $data =  json_encode($age);


//json decode

$jsonform = '{"Peter":35,"Ben":37,"Joe":43}';
$original = var_dump(json_decode($jsonform));
echo '<pre>';
echo $original;
echo '</pre>';
