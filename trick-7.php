<?php

ob_start(function ($buf) {
    return strrev($buf);
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
