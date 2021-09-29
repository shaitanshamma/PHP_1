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

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case "add":
            return add($arg1, $arg2);
        case "sub":
            return sub($arg1, $arg2);
        case "mult":
            return mult($arg1, $arg2);
        case "div":
            return div($arg1, $arg2);
        default:
           return "Нет такой операции";
    }
}