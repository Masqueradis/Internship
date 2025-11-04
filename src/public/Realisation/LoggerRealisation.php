<?php

declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use Realisation\Logger\LoggerInterface;
use Realisation\Logger\LogLevel;
use Realisation\Logger\Logger;

$logFile = sys_get_temp_dir() . '/myapp_log.txt';
$logger = new Logger($logFile);

$logger->error("Failed to connect {username} to {database}", ['database' => 'mysql', 'username' => 'localhost']);
echo "<br>";
$logger->warning("Query is taking too long - {duration} seconds", ['duration' => '3.2']);
echo "<br>";
$logger->info("User {username} has logged in" , ['username' => 'localhost']);
echo "<br>";
$logger->debug("Executing SQL: {query} with params: {par}", ['query' => 'SELECT * FROM users WHERE status = ?', 'par' => 'active']);


echo "<br>" . "<a href='../index.php'>Back</a>";
