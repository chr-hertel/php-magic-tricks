<?php
namespace trick;

function var_dump($input) {
    \var_dump(!$input);
}

// NO CHANGES ALLOWED BELOW

var_dump(true === false);

/*
 * Magic output:
 *
 * bool(true)
 */
