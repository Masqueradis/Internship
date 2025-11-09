<?php

declare(strict_types=1);

namespace App\Animals;

use App\Animals\Entity\Dog;
use App\Animals\Entity\Cat;
use App\Animals\Entity\Bird;

class AnimalInvoker
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
            printf('<br>');
        }
    }
}
