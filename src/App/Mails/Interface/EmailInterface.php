<?php

declare(strict_types=1);

namespace App\Mails\Interface;

interface EmailInterface
{
    public function send(string $to): void;
}
