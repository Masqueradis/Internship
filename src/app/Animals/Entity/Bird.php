<?php

declare(strict_types=1);

namespace Realisation\Animals;

class Bird implements AnimalInterface
{
    public function makeSound(): string
    {
        return "tweet tweet <br>";
    }

    public function eat(): string
    {
        return "The bird eats <br>";
    }

    public function sleep(): string
    {
        return "The bird sleeps <br>";
    }
}
