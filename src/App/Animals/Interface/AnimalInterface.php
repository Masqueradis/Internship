<?php

declare(strict_types=1);

namespace App\Animals\Interface;

interface AnimalInterface
{
    public function makeSound(): void;
    public function eat(): void;
    public function sleep(): void;
}
