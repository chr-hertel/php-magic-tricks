<?php

function callback($buf)
{
    return 'World!';
}
ob_start("callback");

// NO CHANGES ALLOWED BELOW

$var = 'Hello!';
echo $var;

/*
 * Magic output:
 *
 * World!
 */
