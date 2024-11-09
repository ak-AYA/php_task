<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


// string ---different letter---

$string1 = 'dragonball';
$string2 = 'dragonboll';


$minLength = min(strlen($string1), strlen($string2));
for ($i = 0; $i < $minLength; $i++) {
    if ($string1[$i] !== $string2[$i]) {
        echo 'First difference between two strings at position ' . ($i + 1) . ': "' . $string1[$i] . '" vs "' . $string2[$i] . '"<br>';
        exit;
    }
}

echo "same string!";

echo '<br>';
// string ---var-dump array--

echo '<br>';
$string = "Twinkle, twinkle, little star.";
$array = explode(" ", $string);
var_dump($array);
echo '<br>';

// string ---var-dump array--


// $char = 'a'; 

// $asciiValue = ord($char);

// if ($asciiValue == ord('z')) {
//     $nextChar = 'a';
// } elseif ($asciiValue == ord('Z')) {
//     $nextChar = 'A';
// } else {
//     $nextChar = chr($asciiValue + 1);
// }

// echo "The next letter after '$char' (ASCII $asciiValue) is '$nextChar' (ASCII " . ord($nextChar) . ").";

$char = 'a';  
$nextChar = chr(ord($char) + 1);

echo "The next letter after '$char' is '$nextChar'.";





?>

</body>
</html>