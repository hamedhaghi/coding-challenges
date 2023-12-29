<?php

declare(strict_types=1);
function solution($E, $L)
{
    $entry = explode(":", $E);
    $exit = explode(":", $L);

    // Convert times to minutes
    $entryMinutes = $entry[0] * 60 + $entry[1];
    $exitMinutes = $exit[0] * 60 + $exit[1];

    $duration = $exitMinutes - $entryMinutes;

    $entranceFee = 2;
    $firstHourCost = 3;
    $additionalHourCost = 4;

    if ($duration <= 60) {
        // less that 1 hour
        $totalCost = $entranceFee + $firstHourCost;
    } else {
        // more than 1 hour
        $totalCost = $entranceFee + $firstHourCost + ceil(($duration - 60) / 60) * $additionalHourCost;
    }

    return (int)$totalCost;
}

$arr = [
    ['start' => '09:42', 'end' => '11:42'], // 2+3+4=9
    ['start' => '10:00', 'end' => '13:21'], // 2+3+(3*4) = 17
];

foreach ($arr as $val) {
    echo solution($val['start'], $val['end']) . PHP_EOL;
}
