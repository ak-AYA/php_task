 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// Loops ---last dash---

for ($i = 1; $i <= 10; $i++) {
    echo $i;

    if ($i < 10) {
        echo "-";
    }
}


// Loops ---sum of num (0-30)---
$sum=0;
for ( $i = 0; $i <= 30; $i++) {
    $sum = $sum + $i;

}
 echo '<br> the total is ' . $sum . '<br>';
 echo '<br>';
// Loops ---letters loop---

for ($i=1; $i<=5; $i++){
    for($x=1; $x <= 5; $x++){
        if($x <= 5 - $i){
            echo 'A';
        }else{ echo chr(64 + $i) ;
        }
    }
    echo '<br>';
}


echo '<br>';
// Loops ---numbers loop---

for ($i=1; $i<=5; $i++){
    for($x=1; $x <= 5; $x++){
        if($x <= 5 - $i){
            echo '1';
        }else{ echo $i ;
        }
    }
    echo '<br>';
}

echo '<br>';
// Loops --- 0 loop ---

for ($i=1; $i<=5; $i++){
    for($x=1; $x <= 5; $x++){
        if($x == $i){
            echo $i;
        }else{
             echo '0' ;
        }
    }
    echo '<br>';
}
echo '<br>';

// Loops --- !number---
$total = 1;
for ($i=5; $i > 0; $i--){
    $total = $total * $i;
}
echo $total . '<br>';

// Loops --- table---

echo '<br>';
echo "<table border='1' cellpadding='13px' cellspacing='0px'>";

for ($i = 1; $i <= 6; $i++) {
    echo "<tr>";
    
    for ($y = 1; $y <= 5; $y++) {
        
        $result = $i * $y;
        echo "<td>{$i} * {$y} = {$result}</td>";
    }
    echo "</tr>";
}
echo "</table>";

// Loops --- !number---

echo '<br>';





?>




</body>
</html>