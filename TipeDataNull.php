<?php   
// data null
$name = 'eko';
$name = null;

$age = null;

echo 'Name :';
echo $name;
echo "\n";

echo 'Age :';
echo $age;
echo "\n";

// mengecek apakah variabel itu null 
echo " Is name null :";
var_dump(is_null($name));
echo "\n";

// menghapus variabel
$contoh = "eko";
unset($contoh);
echo $contoh;

// mengecek apakah variabelnya ada dan nilainya tidak null
$contoh1 = "rizka";
var_dump(isset($contoh1));
