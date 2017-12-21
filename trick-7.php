<?php

ob_start(function (string $buffer, int $phase) {
	fwrite(STDOUT, strrev($buffer));
});

// NO CHANGES ALLOWED BELOW

echo 'Foobar';
echo PHP_EOL;
echo 'Hello World';

/*
 * Magic output:
 *
 * dlroW olleH
 * rabooF
 */
