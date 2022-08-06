<?php
function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}
sayHello("Rizka", "strtoupper");
sayHello("Rizka", "strtolower");
// anonymous function
sayHello("Rizka", function(string $name) : string{
    return strtoupper($name);
});
// arrow function
sayHello("Rizka", fn($name)=> strtolower($name));
