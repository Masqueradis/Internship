<?php

declare(strict_types=1);

namespace app\Animals\Entity;

use app\Animals\Interface\AnimalInterface;

class Dog implements AnimalInterface
{
    public function makeSound()
    {
        printf('woof woof <br>');
    }

    public function eat()
    {
        printf('The dog eats <br>');
    }

    public function sleep()
    {
        printf('The dog sleeps <br>');
    }
}
