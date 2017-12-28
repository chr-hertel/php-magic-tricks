<?php

ob_start(function() {
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
