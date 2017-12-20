<?php

ob_start(function() { return 'Hello PHP World'; });

// NO CHANGES ALLOWED BELOW

echo 'Hello';
echo 'World';

/*
 * Magic output:
 *
 * Hello PHP World
 */
