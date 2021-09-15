<?php

$a = rand(-10, 10);
$b = rand(-10, 10);

echo "a = {$a} <br>";
echo "b = {$b} <br>";

if ($a >= 0 && $b >= 0) {
    echo "a и b положительные";
} else if ($a < 0 && $b < 0) {
    echo "a и b отрицательные";
} else if (($a >= 0 && $b < 0) || ($a < 0 && $b >= 0)) {
    echo "a и b разных знаков";
}