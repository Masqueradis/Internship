<?php

declare(strict_types=1);

namespace app\Logger\Entity;

use app\Logger\Interface\LoggerInterface;

class Logger implements LoggerInterface
{
    private $logFile;

    public function __construct($logFile = null)
    {
        $this->logFile = $logFile;
    }

    public function log($level, $message, array $context = array()): void
    {
        $message = $this->interpolate($message, $context);
        $formattedMessage = $this->format($level, $message, $context);

        echo $formattedMessage;
        
        if($this->logFile)
        {
            file_put_contents($this->logFile, $formattedMessage, FILE_APPEND | LOCK_EX);
        }
    }

    private function interpolate($message, array $context=[])
    {
    $replace = array();
    foreach ($context as $key => $val) 
        {
        if (!is_array($val) && (!is_object($val) || method_exists($val, '__toString'))) 
            {
            $replace['{' . $key . '}'] = $val;
            }
        }
    return strtr($message, $replace);
    }

    private function format ($level, $message, array $context = [])
    {
        $message = $this->interpolate($message, $context);
        return '[' . date ('Y-m-d H:i:s') . '] ' . strtoupper($level) . ': ' . $message . PHP_EOL; 
    }

    public function info($message, array $context = array()): void
    {
        $this->log(LogLevel::INFO, $message, $context);
    }

    public function warning($message, array $context = array()): void
    {
        $this->log(LogLevel::WARNING, $message, $context);
    }

    public function error($message, array $context = array()): void
    {
        $this->log(LogLevel::ERROR, $message, $context);
    }

    public function debug($message, array $context = array()): void
    {
        $this->log(LogLevel::DEBUG, $message, $context);
    }
}
