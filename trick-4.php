<?php

declare(ticks=1);
register_tick_function(function() {
    $GLOBALS['var'] = 'World!';
});


// NO CHANGES ALLOWED BELOW

$var = 'Hello!';
echo $var;

/*
 * Magic output:
 *
 * World!
 */
