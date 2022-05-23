<?php

$arrayNoun = [
    "счастья",
    "здоровья",
    "успеха"
];
shuffle($arrayNoun);

$arrayAdj = [
    "бесконечного",
    "крепкого",
    "космического"
];
shuffle($arrayAdj);

$greetingsArray = [];

foreach ($arrayNoun as $index => $item) {
    $newItem = "${arrayAdj[$index]} {$item}";
    $greetingsArray[$index] = $newItem;
}

$greetingsNouns = implode(", ", $greetingsArray);

$name = readline("Как Ваше имя? ");

$greetings = "Дорогой {$name}" . ", от всего сердца поздравляю тебя с днем рождения, и желаю " . "$greetingsNouns" . "!";

//print_r($greetingsArray);
echo $greetings;
