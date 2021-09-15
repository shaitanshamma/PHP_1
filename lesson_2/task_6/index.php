<?php

function power($val, $pow)
{
    if ($pow === 0) {
        return 1;
    } else if ($pow > 0) {
        return $val * power($val, $pow - 1);
    } else if ($pow < 0) {
        return 1 / ($val * power($val, -$pow - 1));
    }
}

echo power(4, 3);