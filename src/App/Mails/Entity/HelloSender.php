<?php

declare(strict_types=1);

namespace App\Mails\Entity;

use App\Mails\Interface\EmailInterface;
use PHPMailer\PHPMailer\PHPMailer;

class HelloSender implements EmailInterface
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
        $this->mailer->Subject = 'Hello';
        $this->mailer->Body = 'Hello works';

        $result = $this->mailer->send();

        if ($result) {
            printf('Hello Email sent successfully!<br>');
        } else {
            printf('Failed to send Hello email.<br>');
        }
    }
}
