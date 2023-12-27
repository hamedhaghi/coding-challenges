<?php

function duplicateCount($text)
{
    $splited = str_split(strtolower($text));
    $data = array_count_values($splited);
    $numberOfDuplicateChars = 0;
    foreach ($data as $seen) {
        if ($seen > 1) {
            $numberOfDuplicateChars++;
        }
    }
    return $numberOfDuplicateChars;
}


echo duplicateCount('aabbcde'); // expects 2 [aa], [bb]
