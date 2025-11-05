<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php'; 

use app\Animals\Dog;
use app\Animals\Cat;
use app\Animals\Bird;

$animals = [
    new Dog(), 
    new Cat(), 
    new Bird()
];

foreach($animals as $animal)
{
    $animal->makeSound();
    $animal->eat();
    $animal->sleep();
    echo "<br>";
}

echo "<a href='../index.php'>Back</a>";
