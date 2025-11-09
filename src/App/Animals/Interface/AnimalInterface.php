<?php

declare(strict_types=1);

namespace App\Animals\Interface;

interface AnimalInterface
{
    public function makeSound();
    public function eat();
    public function sleep();
}
