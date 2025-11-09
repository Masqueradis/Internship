<?php

declare(strict_types=1);

namespace Animals;

use Animals\Entity\Dog;
use Animals\Entity\Cat;
use Animals\Entity\Bird;

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
