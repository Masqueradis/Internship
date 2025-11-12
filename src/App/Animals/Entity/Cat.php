<?php

declare(strict_types=1);

namespace App\Animals\Entity;

use App\Animals\Interface\AnimalInterface;

class Cat implements AnimalInterface
{
    public function makeSound(): void
    {
        printf('meow meow <br>');
        return;
    }

    public function eat(): void
    {
        printf('The cat eats <br>');
        return;
    }

    public function sleep(): void
    {
        printf('The cat sleeps <br>');
        return;
    }
}
