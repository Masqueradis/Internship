<?php

declare(strict_types=1);

namespace App\Animals\Entity;

use App\Animals\Interface\AnimalInterface;

class Cat implements AnimalInterface
{
    public function makeSound(): void
    {
        printf('meow meow <br>');
    }

    public function eat(): void
    {
        printf('The cat eats <br>');
    }

    public function sleep(): void
    {
        printf('The cat sleeps <br>');
    }
}
