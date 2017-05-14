<?php

function calculateDivisibility(int $number, array $dividers): int
{
    $temp = 0;

    foreach ($dividers as $divider) {
        if ($number % $divider === 0) {
            $temp += $divider;
        }
    }

    return $temp;
}

function getStringByInt(int $n): string
{
    $num = calculateDivisibility($n, [3, 5]);
    switch ($num) {
        case 0:
            return $n;
        case 3:
            return "Linio";
        case 5:
            return "IT";
        case 8:
            return "Linianos";
    }
}
