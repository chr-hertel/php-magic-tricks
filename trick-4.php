<?php
/*
 *
 * Insert Magic Code Here
 *
 *
 *
 *
 *
 *
 */

$var = new class
{
    public function __destruct()
    {
        global $var;

        $var = 'World';
    }
};

// NO CHANGES ALLOWED BELOW
$var = 'Hello!';
echo $var;
/*
 * Magic output:
 *
 * World!
 */