<?php

declare(strict_types=1);

namespace App\Logger;

use App\Logger\Entity\Logger;

class LoggerInvoker
{
    public function __invoke(): void
    {
        $logger = new Logger();

        $logger->errorr(
            'Failed to connect {username} to {database}',
            ['database' => 'mysql',
        'username' => 'localhost']
        );
        printf('<br>');

        $logger->warningg(
            'Query is taking too long - {duration} seconds',
            ['duration' => '3.2']
        );
        printf('<br>');

        $logger->infoo(
            'User {username} has logged in',
            ['username' => 'localhost']
        );
        printf('<br>');

        $logger->debugg(
            'Executing SQL: {query} with params: {par}',
            ['query' => 'SELECT * FROM users WHERE status = ?',
        'par' => 'active']
        );
    }
}
