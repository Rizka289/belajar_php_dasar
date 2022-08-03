<?php

function SayHello(){
    echo "Hi, My Name rizka" . PHP_EOL;
}
SayHello();

// membuat function bisa dimana aja contohnya di dalam perulangan 
$buat = true;
if($buat){
    function SayHelloo(){
        echo "Hi, My Name " . PHP_EOL;
    }
}
SayHelloo();