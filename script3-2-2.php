<?php

$arrayNoun = [
    "счастья",
    "здоровья",
    "успеха"
];
//shuffle($arrayNoun);
$arrayNounNew = [];
foreach ($arrayNoun as $index => $item) {
    do {
        $newIndex = array_rand($arrayNoun);
        $newItem = $arrayNoun[$newIndex];
    } while (in_array($newItem, $arrayNounNew));
    $arrayNounNew[] = $newItem;
}

$arrayAdj = [
    "бесконечного",
    "крепкого",
    "космического"
];
$arrayAdjNew = [];

foreach ($arrayAdj as $index => $item) {
    do {
        $newIndex = array_rand($arrayAdj);
        $newItem = $arrayAdj[$newIndex];
    } while (in_array($newItem, $arrayAdjNew));
    $arrayAdjNew[] = $newItem;
}

$greetingsArray = [];

foreach ($arrayNounNew as $index => $item) {
    $newItem = "${arrayAdjNew[$index]} {$item}";
    $greetingsArray[$index] = $newItem;
}

$greetingsNouns = implode(", ", $greetingsArray);

$name = readline("Как Ваше имя? ");

$greetings = "Дорогой {$name}" . ", от всего сердца поздравляю тебя с днем рождения, и желаю " . "$greetingsNouns" . "!";

//print_r($greetingsArray);
echo $greetings;
