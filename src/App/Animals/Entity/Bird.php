<?php

declare(strict_types=1);

namespace App\Animals\Entity;

use App\Animals\Interface\AnimalInterface;

class Bird implements AnimalInterface
{
    public function makeSound(): void
    {
        printf('tweet tweet <br>');
        return;
    }

    public function eat(): void
    {
        printf('The bird eats <br>');
        return;
    }

    public function sleep(): void
    {
        printf('The bird sleeps <br>');
        return;
    }
}
