<?php
<<< HEAD
anonymouse function tidak bisa mengakses variable diluar function
jika mo menggunakan variable di luar function kita perlu menyebutkannya
menggunakan kata use
HEAD;


$sayHello = function(string $name)
{
    echo "Hello $name" . PHP_EOL;
};

$sayHello("eko");
$sayHello("budi");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Eko", function(string $name): string {
    return strtoupper($name);
});

// cara kedua
$filterFunction = function(string $name): string {
    return strtoupper($name);
};
sayGoodBye("Eko", $filterFunction);

$firstName = "Rizka";
$lastName = "Rachmawati";

$sayHelloRizka = function() use($firstName, $lastName){
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloRizka();