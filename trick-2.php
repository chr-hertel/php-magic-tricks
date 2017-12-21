<?php

$array = new class implements Countable {
	public function count() {
		$GLOBALS['array'] = [2 => new class {
			public function __destruct() {
				$GLOBALS['array'][2] = 6;
			}
			public function __toString() {
				return '3';
			}
		}];
		return 3;
	}
};

// NO CHANGES ALLOWED BELOW

var_dump(count($array), array_sum($array));

$array[0] = 1;
$array[1] = 2;
$array[2] = 3;

var_dump(count($array), array_sum($array));

/*
 * Magic output:
 *
 * int(3)
 * int(0)
 * int(3)
 * int(9)
 */
