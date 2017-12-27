<?php

ob_start(function ($buf) {
    return 'World!';
});

// NO CHANGES ALLOWED BELOW

$var = 'Hello!';
echo $var;

/*
 * Magic output:
 *
 * World!
 */
