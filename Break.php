<?php
$counter = 1;

while(true){
    echo "Ini adalah break yang ke- $counter" . PHP_EOL;
    $counter++;
    if($counter > 10){
        break;
    }
}
// jika break menghentikan semua perulangan