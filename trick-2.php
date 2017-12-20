<?php

namespace Acme;

use function Acme\trick as array_sum;

function trick($a) {
    return $a[0] == 0 ? 0: 9;
}

$array = [0, 0, 0];

// NO CHANGES ALLOWED BELOW


var_dump(count($array), array_sum($array));

$array[0] = 1;
$array[1] = 2;
$array[2] = 3;

var_dump(count($array), array_sum($array));

/*
 * Magic output:
 *
 * int(3)
 * int(0)
 * int(3)
 * int(9)
 */
