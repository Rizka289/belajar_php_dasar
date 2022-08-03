<?php

// Tanpa null coalescing operator

$data = [
    "action" => "create"
];

if(isset($data["action"])){
    $action = $data["action"];
}else{
    $action = "Nothing";
}

echo $action . PHP_EOL;

// Koding menggunakan null coalescing

$data1 = [
    "action" => "create"
];
$action1 = $data1["action"] ?? "Nothing";

echo $action1 . PHP_EOL;