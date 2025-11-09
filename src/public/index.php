<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Animals\AnimalInvoker;

$animals = new AnimalInvoker();
$animals();
