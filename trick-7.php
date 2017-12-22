<?php

ob_start(function (string $buffer) : string {
    return strrev($buffer) . PHP_EOL;
});

// NO CHANGES ALLOWED BELOW

echo 'Foobar';
echo PHP_EOL;
echo 'Hello World';

/*
 * Magic output:
 *
 * dlroW olleH
 * rabooF
 */
