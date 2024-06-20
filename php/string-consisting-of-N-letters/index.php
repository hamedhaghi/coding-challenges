<?php

declare(strict_types=1);

function solution(string $S): bool
{
    $seenB = false;

    for ($i=0; $i < strlen($S); $i++) {
        if ($S[$i] === 'b') {
            $seenB = true; // We saw 'b'
        } elseif ($S[$i] === 'a' && $seenB) {
            // We found 'a' after we have already seen 'b', so return false
            return false;
        }
    }

    return true;
}


var_dump(solution('abbaa'));
var_dump(solution('aabb'));