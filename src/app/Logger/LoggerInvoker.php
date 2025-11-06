<?php

declare(strict_types=1);

namespace app\Logger;

use app\Logger\Entity\Logger;

class LoggerInvoker
{
    public function __invoke()
    {    
        $logFile = sys_get_temp_dir() . '/myapp_log.txt';
        $logger = new Logger($logFile);

        $logger->error('Failed to connect {username} to {database}', 
        ['database' => 'mysql', 
        'username' => 'localhost']);
        echo "<br>";
        $logger->warning('Query is taking too long - {duration} seconds', 
        ['duration' => '3.2']);
        echo "<br>";
        $logger->info('User {username} has logged in' , 
        ['username' => 'localhost']);
        echo "<br>";
        $logger->debug('Executing SQL: {query} with params: {par}', 
        ['query' => 'SELECT * FROM users WHERE status = ?', 
        'par' => 'active']);
    }
}
