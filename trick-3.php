<?php

$var = 'echo \'Hello World\' . PHP_EOL;';
$$var = '';
$$$var = 'var';

// NO CHANGES ALLOWED BELOW
eval($$$$var);

/*
 * Magic output:
 *
 * Hello World
 */
