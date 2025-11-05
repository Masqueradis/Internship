<?php

declare(strict_types=1);

namespace Realisation\Animals;

class Dog implements AnimalInterface
{
    public function makeSound(): string
    {
        return "woof woof <br>";
    }

    public function eat(): string
    {
        return "The dog eats <br>";
    }

    public function sleep(): string
    {
        return "The dog sleeps <br>";
    }
}
