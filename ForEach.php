<?php
// jika tidak ada keynya
$names = ["Rizka", "Rachmawati", "Cantik"];
foreach($names as $name ){
    echo "Data  $name" . PHP_EOL;
}
// jika ingin memunculkan keynya
foreach($names as $index => $name ){
    echo "Data ke- $index =  $name" . PHP_EOL;
}

// jika ada key dan valuenya
$person = [
    "first_name" => "Rizka",
    "middle_name" => "Rachmawati",
    "last_name" => "cantik"
];
foreach($person as $key=>$value){
    echo "$key : $value" . PHP_EOL;
}