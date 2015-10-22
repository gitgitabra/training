<?php
function binary_search($value, array $array) {
    $length = count($array);

    if (0 === $length) {
        return false;
    }

    $left = 0;
    $right = $length;

    while ($left + 1 < $right) {
        $mid = $left + ($right - $left) / 2;
        $mid = (integer) $mid;

        if ($value < $array[$mid]) {
            $right = $mid;
        } else {
            $left = $mid;
        }

    }

    return $value === $array[$left];
}

function timer(callable $callable, $runs) {
    $start = microtime(true);

    do {
        $callable();
    } while(--$runs);

    $stop = microtime(true);

    return $stop - $start;
}

$value = 90000;
$array = range(1, 100000);

echo '二分探索', PHP_EOL, timer(function() use($value, $array) {
    binary_search($value, $array);
}, 200), PHP_EOL;