<?php    

declare(strict_types=1);

namespace App\Mails;

use App\Mails\Entity\EmailSender;

class EmailInvoker
{
    public function __invoke($messageType): void
    {
        $email = new EmailSender();
        switch ($messageType) {
            case 'Hello':
                $email->sendHello('test@example.com');
                break;
            case 'Reminder':
                $email->sendReminder('test@example.com');
                break;
            case 'Notification':
                $email->sendNotification('test@example.com');
                break;
            default:
                $email->send('test@example.com');
                break;
        }
    }
}
