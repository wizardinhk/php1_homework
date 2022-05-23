<?php

//ВНИМАНИЕ! НЕ НА ВСЕ ЭЛЕМЕНТЫ РАБОТАЕТ
//НЕ ЗНАЮ ПОЧЕМУ.

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];

function searchItem(string $searchName, array $searchBox): bool
{
    foreach ($searchBox as $value) {
        if (is_array($value)) {
            return searchItem($searchName, $value);
        } elseif ($searchName == $value) {
                return true;
            }
    }
    return false;
};
$name = 'Тетрадь';
$finalResult = searchItem($name, $box);
var_dump($finalResult);