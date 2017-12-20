<?php

$var = new class {
    public function __destruct() {
        $GLOBALS['var'] = 'World!';
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
