<?php

ob_start(function (string $buffer) : string {
    return wordwrap($buffer, 5, " PHP ", true) . PHP_EOL;
});

// NO CHANGES ALLOWED BELOW

echo 'Hello';
echo 'World';

/*
 * Magic output:
 *
 * Hello PHP World
 */
