<?php

function solution(string $binary): int
{
    preg_match('/1(0.*)1/', $binary, $matches);
    if (isset($matches[1])) {
        $maxLength = strlen(max(explode('1', $matches[1])));
        return $maxLength;
    }
    return 0;
}

foreach (range(1, 100) as $number) {
    $binary = decbin($number);
    $solution = solution($binary);
    echo "number:$number | binary:$binary | gap length:$solution" . PHP_EOL;
}
