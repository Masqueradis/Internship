<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Mails\EmailInvoker;

$mail = new EmailInvoker();

$mail('Test');
$mail('Hello');
$mail('Reminder');
$mail('Notification');
