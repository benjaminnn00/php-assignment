<?php
function reverseNumber($number) {
    $reverse = 0;
    while ($number != 0) {
        $digit = $number % 10;
        $reverse = $reverse * 10 + $digit;
        $number = (int)($number / 10);
    }
    return $reverse;
}

$number = 2468;
$reversedNumber = reverseNumber($number);
echo "Original number: $number<br>";
echo "Reversed number: $reversedNumber";
?>