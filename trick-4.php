<?php

$var = new class {
    public function __destruct()
    {
        $GLOBALS['var'] = $this;
    }
    public function __toString()
    {
        return 'World!';
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
