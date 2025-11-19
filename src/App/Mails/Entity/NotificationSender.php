<?php

declare(strict_types=1);

namespace App\Mails\Entity;

use App\Mails\Interface\EmailInterface;

class NotificationSender implements EmailInterface
{
    public function send($to): void
    {
        $result = mail($to, 'Notification', 'Hello works');

        if ($result) {
            printf('Notification Email sent successfully!<br>');
        } else {
            printf('Failed to send email.<br>');
        }
    }
}
