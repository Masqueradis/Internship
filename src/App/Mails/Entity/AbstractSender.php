<?php

declare(strict_types=1);

namespace App\Mails\Entity;

use App\Mails\Interface\EmailInterface;
use PHPMailer\PHPMailer\PHPMailer;

abstract class AbstractSender implements EmailInterface
{
    public const EMAIL_TYPE = 'Abstract';

    public function __construct(private PHPMailer $mailer)
    {
    }

    public function send($to): void
    {
        $calledClass = get_called_class();

        $this->mailer->clearAddresses();
        $this->mailer->addAddress($to);
        $this->mailer->Subject = $calledClass::EMAIL_TYPE;
        $this->mailer->Body = $calledClass::EMAIL_TYPE . ' works';

        $result = $this->mailer->send();

        if ($result) {
            printf('%s Email sent successfully!<br>', $calledClass::EMAIL_TYPE);
        } else {
            printf('Failed to send %s email.<br>', $calledClass::EMAIL_TYPE);
        }
    }
}
