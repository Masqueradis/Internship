<?php

declare(strict_types=1);

namespace App\Logger\Entity;

use Psr\Log\AbstractLogger;
use Psr\Log\LogLevel;

class Logger extends AbstractLogger
{
    /**
     * @var AbstractLogger
     */
    private $logFile;

    private array $levelMap = [
        'infoo' => [
            'level' => LogLevel::INFO,
            'file' => __DIR__ . '/logs/info.log'
        ],
        'warningg' => [
            'level' => LogLevel::WARNING,
            'file' => __DIR__ . '/logs/warning.log'
        ],
        'errorr' => [
            'level' => LogLevel::ERROR,
            'file' => __DIR__ . '/logs/error.log'
        ],
        'debugg' => [
            'level' => LogLevel::DEBUG,
            'file' => __DIR__ . '/logs/debug.log'
        ]
    ];

    public function __call(string $method, array $arguments): void
    {
        $message = $arguments[0];
        $context = $arguments[1];
            
        $this->logFile = $this->levelMap[$method]['file'];

        $dir = dirname($this->logFile);
        
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
        
        if (!file_exists($this->logFile)) {
            touch($this->logFile);
        }

        $this->log($this->levelMap[$method]['level'], $message, $context);
    }

    public function log($level, $message, array $context = array()): void
    {
        $message = $this->interpolate($message, $context);
        $formattedMessage = $this->format($level, $message, $context);

        echo $formattedMessage;
        
        if($this->logFile) {
            file_put_contents($this->logFile, $formattedMessage, FILE_APPEND | LOCK_EX);
        }
    }

    private function interpolate($message, array $context=[])
    {
        $replace = array();

        foreach ($context as $key => $val) {
            if (!is_array($val) && (!is_object($val) || method_exists($val, '__toString'))) {
                $replace['{' . $key . '}'] = $val;
                }
            }
            
        return strtr($message, $replace);
    }

    private function format ($level, $message, array $context = [])
    {
        $message = $this->interpolate($message, $context);
        
        return sprintf(
            '[%s] %s: %s%s',
            date('Y-m-d H:i:s'),
            strtoupper($level),
            $message,
            PHP_EOL
        );
    }
}
