<?php
/*
 *
 * Insert Magic Code Here
 *
 *
 */
ob_start(function ($content) {
    return wordwrap($content, 5, " PHP ", true);
});
// NO CHANGES ALLOWED BELOW
echo 'Hello';
echo 'World';
/*
 * Magic output:
 *
 * Hello PHP World
 */