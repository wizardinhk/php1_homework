<?php
$array = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

function checkArray (array $array): array
{
    $max = max($array);
    $min = min($array);
    $average = round((array_sum($array)) / (count($array)), 2);
    $newArray = [$max, $min, $average];
    return $newArray;
};
$result = checkArray($array);
print_r($result);