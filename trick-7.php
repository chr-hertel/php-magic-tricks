<?php
/*
 * Insert Magic Code Here
 */

ob_start(function ($content) {
     return strrev($content);
}, 1024);

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