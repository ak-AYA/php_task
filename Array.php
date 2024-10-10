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
  echo $number . ' ';
}






?>




</body>
</html>