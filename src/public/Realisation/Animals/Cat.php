<?php

declare(strict_types=1);

namespace Realisation\Animals;

class Cat implements AnimalInterface
{
    public function makeSound()
    {
        echo "meow meow <br>";
    }

    public function eat()
    {
        echo "The cat eats <br>";
    }

    public function sleep()
    {
        echo "The cat sleeps <br>";
    }
}
