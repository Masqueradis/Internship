<?php

declare(strict_types=1);

namespace Realisation\Animals;

interface AnimalInterface
{
    public function makeSound();
    public function eat();
    public function sleep();
}
