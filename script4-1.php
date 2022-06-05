<?php

$array = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$newArray = [];
$foo2 = function($n) {
    global $newArray;
    if ($n % 2 == 0) {
    $newArray[] = "even";
    }
    else $newArray[] = "odd";
};
$foo1 = function ($foo2, $array, &$newArray) {
    array_map($foo2, $array);
    return $newArray;
};
$result = $foo1 ($foo2, $array, $newArray );
print_r($result);
