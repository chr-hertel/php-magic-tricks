<?php

function callback($buf)
{
    return 'Hello PHP World';
}
ob_start("callback");

// NO CHANGES ALLOWED BELOW

echo 'Hello';
echo 'World';

/*
 * Magic output:
 *
 * Hello PHP World
 */
