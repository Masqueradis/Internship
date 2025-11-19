<?php

declare(strict_types=1);

namespace App\Mails\Entity;

use App\Mails\Interface\EmailInterface;

class HelloSender implements EmailInterface
{
    public function send($to): void
    {
        $result = mail($to, 'Hello', 'Hello works');

        if ($result) {
            printf('Hello Email sent successfully!<br>');
        } else {
            printf('Failed to send email.<br>');
        }
    }
}
