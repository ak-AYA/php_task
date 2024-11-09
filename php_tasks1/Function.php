<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// Array ---prime number---
function  check($prime) {
    for ($i=2; $i<= sqrt($prime); $i++){
        if ($prime % $i == 0){
            echo "not prime <br>";
            return;
        }
    }
    echo "prime <br>";
}
check (3);

// Array ---reverse ---

function revers($x){
    echo strrev($x);
}

revers ("remove");

// Array ---swap ---

function swap(&$x, &$y) {
    $x = $x + $y;
    $y = $x - $y;
    $x = $x - $y;
}

$x = 12;
$y = 10;

swap($x, $y);

echo "<br>" . "x = $x, y = $y" . "<br>"; 
// Array ---swap ---

function Checknum($number){
    $sum = 0;  
    $x = $number;  
    while($x != 0)  
    {  
        $rem = $x % 10;  
        $sum = $sum + $rem*$rem*$rem;  
        $x = (int)($x / 10);  
    }  
     

    if ($number == $sum){
    return "$number is an Armstrong Number";
} else {
    return "$number is not an Armstrong Number";
}   
}
$input = 407;
echo Checknum($input) . "<br>";

 
// Array ---checks whether ---

function whether($string) {
    $cleanedString = preg_replace("/[^A-Za-z0-9]/", '', strtolower($string));
    
    if ($cleanedString == strrev($cleanedString)) {
        return "Yes it is a palindrome";
    } else {
        return "No it is not a palindrome";
    }
}

$input = "Eva, can I see bees in a cave?";
echo whether($input) . "<br>";

// Array --- remove duplicates ---
function removeDuplicates($array) {
    return array_unique($array);
}

$array1 = array(2, 4, 7, 4, 8, 4);
$array1 = removeDuplicates($array1);

echo implode("," , $array1);









?>


</body>
</html>