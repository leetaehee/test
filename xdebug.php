<?php

$configAdd = false;

$a = 3;
$b = 4;

if ($configAdd === true) {
    $c = $a + $b;
} else {
    $c = $a - $b;
}

//error_log("c = " . $c);

/**
 * Undocumented function
 *
 * @param integer $a
 * @param integer $b
 * @return integer
 */
function add(int $a,int $b) : int {
    return $a+$b;
}

error_log("xdebug.php");