<?php

function add($a, $b)
{
    return $a + $b;
}

function sub($a, $b)
{
    return $a - $b;
}

function mult($a, $b)
{
    return $a * $b;
}

function div($a, $b)
{
    if ($b === 0) {
        return "На ноль делить в арифметике нельзя)";
    } else {
        return $a / $b;
    }
}

$a = rand(0, 10);
$b = rand(0, 10);

echo "a = {$a} <br>";
echo "b = {$b} <br>";

echo "сумма = " . add($a, $b) . "<br>";
echo "разность = " . sub($a, $b). "<br>";
echo "произведение = " . mult($a, $b). "<br>";
echo "деление = " . div($a, $b). "<br>";
