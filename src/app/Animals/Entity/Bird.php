<?php

declare(strict_types=1);

namespace app\Animals\Entity;

use app\Animals\Interface\AnimalInterface;

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
