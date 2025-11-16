<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\Mails\EmailInvoker;

$mail = new EmailInvoker();

foreach($mail->gen() as $value) {
    $mail($value);
}
