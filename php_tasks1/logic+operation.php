<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php


// Logic+operation --- sum=30---

$sum=0;

$x=10;
$y=10;
if ( $x + $y == 30){
    $sum = $x + $y;
    echo 'the sum of these numbers is ' . $sum . '<br>';

}else{echo 'false';}

echo '<br>';
// Logic+operation --- number? * 3---

echo '<br>';
$num = 20;
if ( $num >0 && $num % 3 == 0){
    echo 'true';
}
echo 'false';

echo '<br>';
// Logic+operation --- between (20 &50)---

echo '<br>';

$number = 50;
if ($number >= 20 && $number <= 50) {
    echo 'true'; 
} else {
    echo 'false';
}
echo '<br>';
// Logic+operation --- largest---

echo '<br>';
echo( 'the largest number is ' . max(1, 5, 9));
echo '<br>';

// Logic+operation --- largest---

echo '<br>';

function calculateElecBill($units) {
    $bill = 0;

    if ($units <= 50) {
        $bill = $units * 2.50;
    } elseif ($units <= 150) {
        $bill = (50 * 2.50) + (($units - 50) * 5.00);
    } elseif ($units <= 250) {
        $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
    } else {
        $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
    }
    return $bill;
}

$unitsConsumed = 300; 
$electricityBill = calculateElecBill($unitsConsumed);
echo "Your electricity bill for $unitsConsumed units is: " . $electricityBill . " JOD";
echo '<br>';

// Logic+operation --- calculater---

echo '<br>';


function calculate($x, $y, $cal) {
    switch ($cal) {
        case 'add':
            return $x + $y;
        
        case 'subtract':
            return $x - $y;
        
        case 'multiply':
            return $x * $y;
        
        case 'divide': 
            if ($y > 0) { 
                return $x / $y;
            } else {
                return 'false input!';
            }
        default:
            return 'Error'; 
    }
}

$x = 10; $y = 5; 
$calculate = 'add'; 

$result = calculate($x, $y, $calculate);
echo $result;
echo '<br>';

// Logic+operation --- min age---

echo '<br>';
$age = 15;
if ( $age >= 18){
    echo 'Happy voting!';
}else{
    echo 'you are not eligible to vote';
}
echo '<br>';
// Logic+operation --- weather---

echo '<br>';
$degree= -60 ;
if($degree < 0){
    echo 'The degree= ' . $degree . ', stay home.';
}elseif($degree > 0) {
echo 'The degree= ' . $degree . ', stay hydrated.';
}else{
echo 'The degree= ' . $degree . ', stay warm.';
}
echo '<br>';
// Logic+operation ---avrage+grade---

echo '<br>';
$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
$average = array_sum($scores) / count($scores);

if ($average < 60) {
    $grade = 'F';
} elseif ($average < 70) {
    $grade = 'D';
} elseif ($average < 80) {
    $grade = 'C';
} elseif ($average < 90) {
    $grade = 'B';
} else {
    $grade = 'A';
}


echo 'Average score: ' . $average . '<br>';
echo 'Grade: ' .  $grade;





?>

</body>
</html>