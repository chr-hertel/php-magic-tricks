<?php

/* Insert Magic Code Here */

$data = new class implements Countable {
    public function count(): int
    {
        return 0;
    }

    public function __toString()
    {
        return 'Hello' . PHP_EOL;
    }
};

// NO CHANGES ALLOWED BELOW

for ($i = 0; $i <= count($data); $i++) {
    $data++;
}

echo $data;

/*
 * Magic output:
 *
 * Hello
 */
