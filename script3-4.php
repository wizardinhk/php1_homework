<?php

$array = ["str", 2, 3, 4, 5, 0, 0, 0, 0, 0];
$arrayNew = [];
foreach ($array as $index => $item) {
    if ($item <> 0 || is_string($item)) {
        $arrayNew[] = $item;
        $arrayNew[] = $item;
        }
}


print_r($arrayNew);
