<?php

declare(strict_types=1);

namespace App\Mails\Entity;

use App\Mails\Interface\EmailInterface;
use PHPMailer\PHPMailer\PHPMailer;

class NotificationSender implements EmailInterface
{
    private PHPMailer $mailer;

    public function __construct(PHPMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function send(string $to): void
    {
        $this->mailer->clearAddresses();
        $this->mailer->addAddress($to);
        $this->mailer->Subject = 'Notification';
        $this->mailer->Body = 'Notification works';

        $result = $this->mailer->send();

        if ($result) {
            printf('Notification Email sent successfully!<br>');
        } else {
            printf('Failed to send Notification email.<br>');
        }
    }
}
