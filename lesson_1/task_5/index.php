<?php

$a = 20;
$b = 33;
echo "Дано:<br> a = $a <br> b = $b <br>";

/*1 способ */
$a += $b;
$b = $a - $b;
$a = $a - $b;

echo "После замены <br>a = $a <br> b = $b <br>";

/*2 способ*/
$a *= $b;
$b = $a / $b;
$a = $a / $b;

echo "Повторная замена <br> a = $a <br> b = $b";