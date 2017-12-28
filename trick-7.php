<?php

ob_start(function($v) {
    return strrev($v);
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
