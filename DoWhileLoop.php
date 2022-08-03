<?php
<<<Head
jika do while mau kondisinya salah
dia akan mengeksekusi dulu sekali di do barulah perulanganke whilenya
Head;

$counter = 1;
do{
    echo "Ini adalah perulangan while ke-$counter" . PHP_EOL;
    $counter++;
}while($counter<=10);