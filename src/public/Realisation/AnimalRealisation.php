<?php

declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use Realisation\Animals\Dog;
use Realisation\Animals\Cat;
use Realisation\Animals\Bird;

$animals = [new Dog(), new Cat(), new Bird()];

foreach($animals as $animal)
{
    $object->makeSound();
    $object->eat();
    $object->sleep();
    echo "<br>";
}

echo "<a href='../index.php'>Back</a>";