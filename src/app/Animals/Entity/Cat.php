<?php

declare(strict_types=1);

namespace Realisation\Animals;

class Cat implements AnimalInterface
{
    public function makeSound(): string
    {
        return "meow meow <br>";
    }

    public function eat(): string
    {
        return "The cat eats <br>";
    }

    public function sleep(): string
    {
        return "The cat sleeps <br>";
    }
}
