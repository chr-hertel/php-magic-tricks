<?php

namespace foo;
function var_dump() {
    \var_dump(true);
}

// NO CHANGES ALLOWED BELOW

var_dump(true === false);

/*
 * Magic output:
 *
 * bool(true)
 */
