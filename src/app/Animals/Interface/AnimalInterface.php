<?php

declare(strict_types=1);

namespace Realisation\Animals;

interface AnimalInterface
{
    public function makeSound(): string;
    public function eat(): string;
    public function sleep(): string;
}
