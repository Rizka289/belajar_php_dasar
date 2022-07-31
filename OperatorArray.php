<?php
$first = [
    "first_name" => "Rizka"
];

$last = [
    "first_name" => "Ivan",
    "last_name" => "Rachmawati"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Eko",
    "last_name" => "Khannedy"
];

$b = [
    "last_name" => "Khannedy",
    "first_name" => "Eko"
];

var_dump($a == $b);
var_dump($a === $b);

