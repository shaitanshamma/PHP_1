<?php

require "../task_3/index.php";

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case "сумма":
            echo "сумма = " . add($arg1, $arg2) . "<br>";
            break;
        case "разность":
            echo "разность = " . sub($arg1, $arg2) . "<br>";
            break;
        case "произведение":
            echo "произведение = " . mult($arg1, $arg2) . "<br>";
            break;
        case "деление":
            echo "деление = " . div($arg1, $arg2) . "<br>";
            break;
        default:
            echo "Нет такой операции" . "<br>";
    }
}

mathOperation(1, 0, 'деление');
mathOperation(4, 4, 'сумма');
mathOperation(4, 4, 'сумrwма');