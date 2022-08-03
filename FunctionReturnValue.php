<?php

function sum(int $first, int $second)
{
    $total = $first + $second;
    return $total;
}
$result = sum(10,10);
var_dump($result);

function getFinalValue (int $value)
{
    if($value >= 80){
        return "A";
    }elseif($value >= 70){
        return "B";
    }elseif($value >= 60){
        return "c";
    }elseif($value >= 50){
        return "D";
    }else{
        return "E";
    }
    echo "Ups" . PHP_EOL;
}

$scoure = getFinalValue(90);
var_dump($scoure);

$scoure = getFinalValue(10);
var_dump($scoure);

// return type declarations
function sum1(int $first, int $second):int
{
    $total = $first + $second;
    return $total;
}
$result = sum1(10,10);
var_dump($result);

function getFinalValue1 (int $value):string
{
    if($value >= 80){
        return "A";
    }elseif($value >= 70){
        return "B";
    }elseif($value >= 60){
        return "c";
    }elseif($value >= 50){
        return "D";
    }else{
        return "E";
    }
    echo "Ups" . PHP_EOL;
}

$scoure = getFinalValue1(90);
var_dump($scoure);