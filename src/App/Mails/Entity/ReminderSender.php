<?php

declare(strict_types=1);

namespace App\Mails\Entity;

use App\Mails\Interface\EmailInterface;

class ReminderSender implements EmailInterface
{
    public function send($to): void
    {
        $result = mail($to, 'Reminder', 'Hello works');

        if ($result) {
            printf ('Reminder Email sent successfully!<br>');
        } else {
            printf ('Failed to send email.<br>');
        }
    }
}
