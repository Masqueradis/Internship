<?php

declare(strict_types=1);

namespace app\Animals\Entity;

use app\Animals\Interface\AnimalInterface;

class Dog implements AnimalInterface
{
    public function makeSound()
    {
        echo "woof woof <br>";
    }

    public function eat()
    {
        echo "The dog eats <br>";
    }

    public function sleep()
    {
        echo "The dog sleeps <br>";
    }
}
