<?php

declare(ticks=3);
register_tick_function(function() {
    echo ' PHP ';
});

// NO CHANGES ALLOWED BELOW

echo 'Hello';
echo 'World';

/*
 * Magic output:
 *
 * Hello PHP World
 */
