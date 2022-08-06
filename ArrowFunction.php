<?php
$firstName = "Rizka";
$lastName = "Rachmawati";

$anonymousFunction = function() use($firstName, $lastName){
    return "Hello $firstName $lastName" . PHP_EOL;
};
$anonymousFunction();

$arrowFunction = fn() =>"Hello1 $firstName $lastName" . PHP_EOL;
echo $arrowFunction();