<?php

declare(strict_types=1);

namespace Realisation\Animals;

interface Animal
{
    public function makeSound();
    public function eat();
    public function sleep();
}