<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php
 //exception - an error or unexpected behaviour of a php script
//  function divide($dividend, $divisor){
//    if($divisor == 0){
//       throw new Exception("Number cannot be divide by zero");
//    }
//    return $dividend/$divisor;
//  }
//  echo divide(5,0)

try{
   $x = 5/"x";
}catch(Exception $e){
   echo "This is not possible";
}

?>
</body>
</html>

