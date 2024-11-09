<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

/// ----- string changes -----
function stringManipulations($str) {
    $uppercase = strtoupper($str);
    echo "Uppercase: $uppercase<br>";

    $lowercase = strtolower($str);
    echo "Lowercase: $lowercase<br>";

    $upfirst = ucfirst($lowercase);
    echo "First letter uppercase: $upfirst<br>";

    $capitalized = ucwords($lowercase);
    echo "Each word capitalized: $capitalized<br>";
}

$input = "Orange Coding Academy?";
stringManipulations($input);


/// ----- string date format -----
function formatTime($input) {
    $hours = substr($input, 0, 2);
    $minutes = substr($input, 2, 2);
    $seconds = substr($input, 4, 2);
    
    return "$hours:$minutes:$seconds";
}
$numericString = '085119';
$formattedTime = formatTime($numericString);
echo $formattedTime . "<br>";



/// ----- check a specific word -----

function wordCheck($sentence, $word) {
    if (stripos($sentence, $word) !== false) {
        return "Word Found!";
    } else {
        return "Word Not Found!";
    }
}

$sentence = 'I am a full stack developer at orange coding academy';
$word = 'Orange';

echo wordCheck($sentence, $word) . "<br>";


/// ----- URL file name -----
function getFileName($url) {
    return basename(parse_url($url, PHP_URL_PATH));
}

$url = 'www.orange.com/index.php';
$fileName = getFileName($url);

echo $fileName . "<br>";


/// ----- username email address-----

function getUsername($email) {
    return strstr($email, '@', true);
}

$email = 'info@orange.com';
$username = getUsername($email);

echo $username . "<br>";


/// -----  last three characters-----
function getLastThreeChars($string) {
    return substr($string, -3);
}

$string = 'info@orange.com';
$lastThreeChars = getLastThreeChars($string);

echo $lastThreeChars . "<br>";

/// ----- generate simple random passwords-----



/// -----  replace the first word -----


function replaceFirstWord($sentence, $newWord) {
    $words = explode(' ', $sentence);
    $words[0] = $newWord;
    return implode(' ', $words);
}

$sentence = 'That new trainee is so genius.';
$newWord = 'Our';

echo replaceFirstWord($sentence, $newWord);

?>



</body>
</html>