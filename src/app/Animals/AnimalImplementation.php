<?php

declare(strict_types=1);

namespace app\Animals;

use app\Animals\Entity\Dog;
use app\Animals\Entity\Cat;
use app\Animals\Entity\Bird;

class AnimalImplementation
{
    public function __invoke()
    {
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
    }
}
