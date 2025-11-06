<?php    

declare(strict_types=1);

namespace app\Mails;

use app\Mails\Entity\EmailSender;

class EmailInvoker
{
    public function __invoke($messageType): void
    {
        if ($messageType == 'Hello') {
            $email = new EmailSender();
            $result = $email->sendHello('test@example.com');

            if ($result) {
                printf ('Hello Email sent successfully!<br>');
            } else {
                printf ('Failed to send email.<br>');
            }

            return;
        }
        if ($messageType == 'Reminder') {
            $email = new EmailSender();
            $result = $email->sendReminder('test@example.com');

            if ($result) {
                printf ('Reminder Email sent successfully!<br>');
            } else {
                printf ('Failed to send email.<br>');
            }

            return;
        }

        if ($messageType == 'Notification') {   
            $email = new EmailSender();
            $result = $email->sendNotification('test@example.com');

            if ($result) {
                printf ('Notification Email sent successfully!<br>');
            } else {
                printf ('Failed to send email.<br>');
            }

            return;
        }
        else {
            $email = new EmailSender();
            $result = $email->send('test@example.com');

            if ($result) {
                printf ('Email sent successfully!<br>');
            } else {
                printf ('Failed to send email.<br>');
            }

            return;
        }
    }
}
