<?php

goto a;
echo "Hello World" . PHP_EOL;

a:
echo "Hello A" . PHP_EOL;

$counter = 1;
while(true){
    echo "Ini adalah perulangan while ke- $counter" . PHP_EOL;
    $counter++;
    if($counter >= 10){
        goto d;
    }
}
d:
echo "End Loop" . PHP_EOL;