<?php

namespace trick;
function var_dump($input) {
    \var_dump(!$input);
}
// it is also can be done with `use const false as true;` but it's boring :)

// NO CHANGES ALLOWED BELOW

var_dump(true === false);

/*
 * Magic output:
 *
 * bool(true)
 */
