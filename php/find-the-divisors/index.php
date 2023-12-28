<?php

declare(strict_types=1);
function divisors($integer): mixed
{
    $numbers = [];
    if ($integer >= 2) {
        foreach (range(2, $integer) as $num) {
            $remainder = $integer / $num;
            $isDividable = ($remainder * $num === $integer);
            if (is_int($remainder) &&  $isDividable && $num !== $integer) {
                $numbers[] = $num;
            }
        }
    }
    if (empty($numbers)) {
        return sprintf('%d is prime', $integer);
    }
    return $numbers;
}
//divisors(12); // => [2, 3, 4, 6]
//divisors(25); // => [5]
//divisors(13); // => '13 is prime'
var_dump(divisors(12), divisors(25), divisors(13));
