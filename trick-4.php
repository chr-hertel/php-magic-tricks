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


/*
* first approach: not against the rules, but it felt a little cheap
* and at that point you could just use ob for all of them
*
* ob_start(function (string $buffer) : string {
*     return 'World!';
* });
*/

declare(ticks=1);
static $var;

register_tick_function(function () use (&$var) {
    $var = 'World!' . PHP_EOL;
});

// NO CHANGES ALLOWED BELOW

$var = 'Hello!';
echo $var;

/*
 * Magic output:
 *
 * World!
 */
