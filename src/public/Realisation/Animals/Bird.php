<?php

declare(strict_types=1);

namespace Realisation\Animals;

class Bird implements Animal
{
    public function makeSound()
    {
        echo "tweet tweet <br>";
    }

    public function eat()
    {
        echo "The bird eats <br>";
    }

    public function sleep()
    {
        echo "The bird sleeps <br>";
    }
}