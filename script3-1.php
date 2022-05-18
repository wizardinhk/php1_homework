<?php
$array1 = [
    0 => 1,
    1 => 2,
    2 => 3,
    3 => 4,
    4 => 5,
    5 => 6,
    6 => 7,
    7 => 8,
    8 => 9,
    9 => 10,
];
$array2 = [
    0 => 1,
    1 => 2,
    2 => 3,
    3 => 4,
    4 => 5,
    5 => 6,
    6 => 7,
    7 => 8,
    8 => 9,
    9 => 10,
];
$number = 0;

$array3 = [];

foreach ($array1 as $key1 => $item1) {
            $number = $item1*$array2[$key1];
            $array3[] = $number;
}
print_r($array3);

