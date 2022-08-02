<?php
$name = "Rizka Rachmawati";

echo "Name : " . $name . PHP_EOL;
echo "Age : " . 23 . PHP_EOL;

// konversi number dan sebaliknya
$valueString = (string) 100;
var_dump($valueString);

$valueInt = (int) "100";
var_dump($valueInt);

$valueFloat = (float) "10.10";
var_dump($valueFloat);

// mengakses karakter
$uj = "Rizka";
echo $uj[0] . PHP_EOL;
echo $uj[1] . PHP_EOL;
echo $uj[2] . PHP_EOL;

// variable parsing
echo "Hello my name $uj". PHP_EOL;

// curly barce
echo "Hello my name {$uj}s". PHP_EOL;
