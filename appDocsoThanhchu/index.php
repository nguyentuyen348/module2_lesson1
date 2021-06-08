<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>number</title>
</head>
<body>
<form method="post">
    <label>
        <input type="number" name="number" placeholder="enter number">
        <input type="submit" name="submit">
    </label>
</form>

<?php
$dictionary = array(
    1 => 'one',
    2 => 'two',
    3 => 'three',
    4 => 'four',
    5 => 'five',
    6 => 'six',
    7 => 'seven',
    8 => 'eight',
    9 => 'nine',
    10 => 'ten',
    11 => 'eleven',
    12 => 'twelve',
    13 => 'thirteen',
    14 => 'fourteen',
    15 => 'fifteen',
    16 => 'sixteen',
    17 => 'seventeen',
    18 => 'eighteen',
    19 => 'nineteen',
    20 => 'twenty',
    30 => 'thirty',
    40 => 'forty',
    50 => 'fifty',
    60 => 'sixty',
    70 => 'seventy',
    80 => 'eighty',
    90 => 'ninety',
    100 => 'one hundred',
    200 => 'two hundred',
    300 => 'three hundred',
    400 => 'four hundred',
    500 => 'five hundred',
    600 => 'six hundred',
    700 => 'seven hundred',
    800 => 'eight hundred',
    900 => 'nine hundred',
    1000 => 'one thousand',
);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = $_POST['number'];

    switch ($number) {
        case 0:
            echo '0-zero';
            break;
        case $number<0:
            echo 'out of m ability';
            break;
        case $number < 20:
            $string = $number.'-'.$dictionary[$number];
            echo $string;
            break;
        case $number <100:
            $string1 = $number.'-'.$dictionary[$number-$number%10].' '.$dictionary[$number%10];
            echo $string1;
            break;
        case $number <=1000:
            $string2 = $number.'-'.$dictionary[$number-$number%100].' '.$dictionary[($number%100)-($number%10)].' '.$dictionary[($number%100)%10];
            echo $string2;
            break;
        default:
            echo 'out of ability';
    }
}
?>

</body>
</html>
