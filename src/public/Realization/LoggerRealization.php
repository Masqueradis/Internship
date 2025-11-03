<?php
require_once "Logger/LoggerInterfaceRealization.php";

$logFile = sys_get_temp_dir() . '/myapp_log.txt';
$logger = new Logger($logFile);

$logger->error("Ошибка подключения {username} к {database}", ['database' => 'mysql', 'username' => 'localhost']);
echo "<br>";
$logger->warning("Запрос выполняется слишком долго - {duration} секунды", ['duration' => '3.2']);
echo "<br>";
$logger->info("Пользователь {username} авторизовался" , ['username' => 'localhost']);
echo "<br>";
$logger->debug("SQL запрос: {query} с параметрами {par}", ['query' => 'SELECT * FROM users WHERE status = ?', 'par' => 'active']);


echo "<br>" . "<a href='../index.php'>Back</a>";
