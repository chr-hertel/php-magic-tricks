<?php
register_tick_function(function () {
	echo ' PHP ';
});
declare(ticks=2);

// NO CHANGES ALLOWED BELOW

echo 'Hello';
echo 'World';

/*
 * Magic output:
 *
 * Hello PHP World
 */
