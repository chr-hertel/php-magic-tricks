<?php
/* Insert Magic Code Here */
$data = new class extends ArrayObject
{
    public function count()
    {
        return 0;
    }

    public function __toString()
    {
        return 'Hello';
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