<?php

declare(strict_types=1);

namespace App\Logger\Entity;

use Psr\Log\LogLevel;

class MyLogLevel 
{
    public function __construct(
    private array $levelMap
    ) {
    /**
     * @var array<string, array{level:string, file:string}>
     */
    $levelMap = [
        'infoo' => [
            'level' => LogLevel::INFO,
            'file' => __DIR__ . '/../../var/logs/info.log'
        ],
        'warningg' => [
            'level' => LogLevel::WARNING,
            'file' => __DIR__ . '/../../var/logs/warning.log'
        ],
        'errorr' => [
            'level' => LogLevel::ERROR,
            'file' => __DIR__ . '/../../var/logs/error.log'
        ],
        'debugg' => [
            'level' => LogLevel::DEBUG,
            'file' => __DIR__ . '/../../var/logs/debug.log'
        ]
    ];

    }
}
