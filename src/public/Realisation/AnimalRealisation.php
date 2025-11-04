<?php

declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use Realisation\Animals\Dog;
use Realisation\Animals\Cat;
use Realisation\Animals\Bird;

$Bobik = new Dog();
$Kitty = new Cat();
$Yastreb = new Bird();

$objects = array($Bobik, $Kitty, $Yastreb);
foreach($objects as $object)
{
    $object->makeSound();
    $object->eat();
    $object->sleep();
    echo "<br>";
}

echo "<a href='../index.php'>Back</a>";