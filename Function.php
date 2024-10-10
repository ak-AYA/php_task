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

function Check($number){
    $sum = 0;  
    $x = $number;  
    while($x != 0)  
    {  
        $rem = $x % 10;  
        $sum = $sum + $rem*$rem*$rem;  
        $x = $x / 10;  
    }  
     

    if ($number == $sum)
        return 1;
     

    return 0;    
}
 
?>


</body>
</html>