<?php

declare(strict_types=1);

function solution($N) {
    $N_str = strval($N);
    $max_value = PHP_INT_MIN;

    foreach (str_split($N_str) as $i => $char) {
        if ($char == '5') {
            $new_value = intval(substr($N_str, 0, $i) . substr($N_str, $i + 1));
            $max_value = max($max_value, $new_value);
        }
    }

    return $max_value;
}


echo solution(15958) . "\n"; // Expected: 1958
echo solution(-5859) . "\n"; // Expected: -589
echo solution(-5000) . "\n"; // Expected: 0