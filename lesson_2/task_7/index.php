<?php

function rightFormat($hour, $minute)
{
    if ($hour == 0) {
        echo $hour . " часов ";
    } elseif ($hour == 1 || $hour == 21) {
        echo $hour . " час ";
    } elseif (($hour >= 2 && $hour <= 4) || (($hour >= 22 && $hour <= 24))) {
        echo $hour . " часa ";
    } else {
        echo $hour . " часов ";
    }
    if ($minute == 0 || ($minute >= 5 && $minute <= 20) || ($minute % 10 >= 5 || $minute <= 9) || $minute % 10 == 0) {
        echo $minute . " минут <br>";
    } elseif ($minute == 1 || ($minute % 10 == 1 && $minute != 11)) {
        echo $minute . " минута <br>";
    } elseif ($minute % 10 >= 2 || $minute % 10 <= 4) {
        echo $minute . " минуты <br>";
    }

}

rightFormat(1, 0);
rightFormat(2, 1);
rightFormat(date("h"), date("i"));