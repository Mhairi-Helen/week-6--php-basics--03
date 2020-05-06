<?php

declare(strict_types=1);


require_once __DIR__ . '/vendor/autoload.php';
// ... code that uses the classes



echo "\nQuestion 1:\n";

use App\Hello;

$sayHi = new Hello();

dump($sayHi->hello("Orb")); // "Hello Orb"
dump($sayHi->hello("Horse")); // "Hello Horse"
