<?php

echo" <h2>MathString</h2>";

$num = -10;
echo "abs($num) = " . abs($num) . "<br>";

$num = 3.14159;
echo "round($num) = " . round($num) . "<br>";  

$num = 4.2;
echo "ceil($num) = " . ceil($num) . "<br>";

$num = 4.8;
echo "floor($num) = " . floor($num) . "<br>";

$base = 2;
$exp = 3;
echo "$base raised to the power of $exp is " . pow($base, $exp) . "<br>";

$num = 16;
echo "The square root of $num is " . sqrt($num) . "<br>";

echo "max(3, 7, 2) = " . max(3, 7, 2) . "<br>";
echo "min(3, 7, 2) = " . min(3, 7, 2) . "<br>";

echo "rand() = " . rand() . "<br>";
echo "rand(1, 100) = " . rand(1, 100) . "<br>";

echo "<h2>String Functions</h2>";

$str = "Hello, World!";
echo "strlen('$str') = " . strlen($str) . "<br>";

$str = "Hello, World!";
echo "strtolower('$str') = " . strtolower($str) . "<br>";

$str = "Hello, World!";
echo "strtoupper('$str') = " . strtoupper($str) . "<br>";

$str3 ="Apple, Banana, Cherry";
$fruits = explode(", ", $str3);
echo "explode(', ', '$str3') = "; 
print_r($fruits);
echo "<br>";

$joined = implode(" - ", $fruits);
echo "implode(' - ', \$fruits) = $joined<br>";


$str4 = "The quick brown fox jumps over the lazy dog";
echo "strrev('$str4') = " . strrev($str4) . "<br>";

?>