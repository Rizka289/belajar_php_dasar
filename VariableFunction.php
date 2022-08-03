<?php

function foo()
{
    echo "FOO" . PHP_EOL;
}

function bar()
{
    echo "BAR" . PHP_EOL;
}

$functionYangAknDipanggil = "foo";
$functionYangAknDipanggil();

$functionYangAknDipanggil = "bar";
$functionYangAknDipanggil();

function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string
{
    return "sample $name";
}

sayHello("Rizka", "sampleFunction");
sayHello("Rizka", "strtoupper");
sayHello("Rizka", "strtolower");

