<?php

declare(strict_types=1);

namespace App\Logger;

use App\Logger\Entity\Logger;

class LoggerInvoker
{
    public function __invoke(): void
    {
        $logger = new Logger();
        /**
         * @var array<int, array{method: string, message: string, context: array<string, mixed>}> $logData
         */
        $logData = [
            [
            'method' => 'errorr',
            'message' => 'Failed to connect {username} to {database}',
            'context' => [
                'database' => 'mysql',
                'username' => 'localhost'
                ]
            ],
            
            [
            'method' => 'warningg',
            'message' => 'Query is taking too long - {duration} seconds',
            'context' => [
                'duration' => '3.2'
                ]
            ],

            [
            'method' => 'infoo',
            'message' => 'User {username} has logged in',
            'context' => [
                'username' => 'localhost'
                ]
            ],

            [
            'method' => 'debugg',
            'message' => 'Executing SQL: {query} with params: {par}',
            'context' => [
                'query' => 'SELECT * FROM users WHERE status = ?',
                'par' => 'active'
                ]
            ]
        ];

        foreach($logData as $data)
        {
            $logger->{$data['method']}($data['message'], $data['context']);
            printf('<br>');
        }
            
    }
}
