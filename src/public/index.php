<?php

declare(strict_types=1);

require_once __DIR__ . "/../vendor/autoload.php";

use app\Animals\AnimalImplementation;

$animals = new AnimalImplementation();
$animals();