<?php

declare(strict_types=1);

namespace app\Animals\Entity;

use app\Animals\Interface\AnimalInterface;

class Cat implements AnimalInterface
{
    public function makeSound()
    {
        printf('meow meow <br>');
    }

    public function eat()
    {
        printf('The cat eats <br>');
    }

    public function sleep()
    {
        printf('The cat sleeps <br>');
    }
}
