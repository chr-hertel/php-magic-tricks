<?php
/*
 * Insert Magic Code Here
 *
 */

$var = new class
{
    public function __toString()
    {
        static $iteration = 0, $limit = 4;
        ++$iteration;

        if ($iteration >= $limit) {
            return 'echo "Hello World";';
        }

        return 'var';
    }
};
// NO CHANGES ALLOWED BELOW
eval($$$$var);
/*
 * Magic output:
 *
 * Hello World
 */