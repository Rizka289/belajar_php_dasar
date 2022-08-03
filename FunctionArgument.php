<?php

function sayHello($name)
{
    echo "Hello $name" . PHP_EOL;
}
sayHello("Rizka");

// default argument value
function sayHello1 ($name = "Anonymous")
{
    echo "Hello $name" . PHP_EOL; 
}
sayHello1();

<<< HEAD
DEFAULT ARGUMENT VALUE SIMPAN PARAMETERNYA YANG 
TERAKHIR JANGAN DI PERTMA
HEAD;

function sayHello2 ($firstName , $name = "Anonymous")
{
    echo "Hello $firstName $name" . PHP_EOL; 
}
sayHello2("Rizka");
sayHello2("Rizka", "Rachmawati");

// type declaration
function sum (int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}
sum("100", "100");
sum(100, 100);
sum(true, false);

// bukan variable-legth argument list
function sumAll (array $values)
{
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "Total " . implode(",", $values) . "= $total" .PHP_EOL;
}
sumAll([1,2,3,4,5]);

// variable-legth argument list
function sumAll1 (...$values)
{
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "Total " . implode(",", $values) . "= $total" . PHP_EOL;
}
// $values = [1,2,3,4,5];
// sumAll1($values);
sumAll1(1, 2, 3, 4 ,5);