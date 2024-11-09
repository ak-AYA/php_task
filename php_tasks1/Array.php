<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// Array ---color order---

 $colors = ['white', 'green', 'red'];

  sort($colors);
  echo "<ul>";
  foreach($colors as $color){
    echo "<li>$color</li>";
  }
  echo"</ul>";

  // Array ---color capitals---

  $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );


foreach ($cities as $country => $city){
  echo "The capital of " . $country . " is " . "<b>" . $city . "</b>" . "</br>";
}

// Array ---first array element---

$coloring = array (4 => 'white', 6 => 'green', 11=> 'red');

echo reset ($coloring) . "<br>";

// Array ---first array element---
$array = array(1, 2, 3, 4, 5);

$position = 3;
$newNum = '$';

array_splice($array, $position, 0, $newNum);
foreach ($array as $number) {
  echo $number . ' ' . "<br>";
}

// Array ---key value array---
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

ksort($fruits);

foreach ($fruits as $key => $value) {
    echo "$key = $value" . '<br>';

}

// Array ---average temperature array---

$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$average = array_sum($temperatures) / count($temperatures);

sort($temperatures);


$lowest = array_slice($temperatures, 0, 5);
$highest = array_slice(array_reverse($temperatures), 0, 5);


echo "Average Temperature is: " . round($average, 1) . "<br>";
echo "List of five lowest temperatures: " . implode(", ", $lowest) . "<br>";
echo "List of five highest temperatures: " . implode(", ", array_reverse($highest)) . "<br>";


// Array ---upper case array---

function convertToUpper($array) {
  return array_map('strtoupper', $array);
}

$colors = array("red", "blue", "white", "yellow");
$upperColors = convertToUpper($colors);

foreach ($upperColors as $color) {
  echo $color . "<br>";
}






?>




</body>
</html>