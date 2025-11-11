<?php

declare(strict_types=1);

namespace App\Animals\Entity;

use App\Animals\Interface\AnimalInterface;

class Dog implements AnimalInterface
{
    public function makeSound(): void
    {
        printf('woof woof <br>');
        return;
    }

    public function eat(): void
    {
        printf('The dog eats <br>');
        return;
    }

    public function sleep(): void
    {
        printf('The dog sleeps <br>');
        return;
    }
}
