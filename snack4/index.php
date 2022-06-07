<!--
    Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
-->




<?php
$ArrRandomNumber = [];

while(count($ArrRandomNumber) < 15) {
    $randomNumber = rand(1,15);

    if(!in_array($randomNumber, $ArrRandomNumber)){

       array_push($ArrRandomNumber,$randomNumber); 
        
     };
};
 var_dump($ArrRandomNumber);

 
?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>sdff</h1>
</body>
</html>