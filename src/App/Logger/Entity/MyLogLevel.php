<?php

declare(strict_types=1);

namespace App\Logger\Entity;

use Psr\Log\LogLevel;


class MyLogLevel
{
    /**
     * @var array<string, array{level: string, file:string}>
     */
    private array $levelMap;

    public function __construct() 
    {
        $this->levelMap = [
        'infoo' => [
            'level' => LogLevel::INFO,
            'file' => __DIR__ . '/../../../var/logs/info.log'
        ],
        'warningg' => [
            'level' => LogLevel::WARNING,
            'file' => __DIR__ . '/../../../var/logs/warning.log'
        ],
        'errorr' => [
            'level' => LogLevel::ERROR,
            'file' => __DIR__ . '/../../../var/logs/error.log'
        ],
        'debugg' => [
            'level' => LogLevel::DEBUG,
            'file' => __DIR__ . '/../../../var/logs/debug.log'
        ]
    ];
    }

    /**
     * @return array<string, array{level: string, file: string}>
     */
    public function getLevelMap(): array
    {
        return $this->levelMap;
    }

    /**
     * @return array{level: string, file: string}
     */
    public function getLevelConfig(string $method): array
    {
        return $this->levelMap[$method];
    }
}
