<?php

declare(strict_types=1);


function solution(array $A)
{
    $occurrences = [];

    foreach ($A as $value) {
        if (!isset($occurrences[$value])) {
            $occurrences[$value] = 1;
        } else {
            $occurrences[$value]++;
        }
    }

    foreach ($A as $value) {
        if ($occurrences[$value] === 1) {
            return $value;
        }
    }

    return -1;
}

$arr = [
    [4, 10, 5, 4, 2, 10], // 5
    [1, 4, 3, 3, 1, 2], // 4
    [6, 4, 4, 6], // -1  
    [1, 14, 3, 1, 2, 2, 5], // 14
    [1, 1, 1, 1], // -1
    [1], // 1
];

foreach ($arr as $value) {
    echo solution($value) . PHP_EOL;
}
