<?php

declare(strict_types=1);

namespace App\Animals\Entity;

use App\Animals\Interface\AnimalInterface;

class Bird implements AnimalInterface
{
    public function makeSound()
    {
        printf('tweet tweet <br>');
    }

    public function eat()
    {
        printf('The bird eats <br>');
    }

    public function sleep()
    {
        printf('The bird sleeps <br>');
    }
}
