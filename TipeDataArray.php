<?php
$values = array(1,2,7.8);
var_dump($values);

$name = ["Rizka","Rachmawati"];
var_dump($name[1]);

$name[0] = "Cantik";
var_dump($name);

unset($name[1]);
var_dump($name);

$name[] = "Kurniawan";
var_dump($name);
var_dump(count($name));

// array map (key and values)

$rizka = [
    "id" => 1,
    "name" => "Rizka Rachmawati",
    "age" => 23
];
var_dump($rizka);
var_dump($rizka["name"]);

// array dalam array
$contoh1 = array(
    "id" => 1,
    "name" => "ivanda yovinsha",
    "age" => 27,
    "address" => [
        "city" => "semarang",
        "country" => "indonesia"
    ],
);
var_dump($contoh1["address"]["city"]);


