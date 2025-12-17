<?php

declare(strict_types=1);

namespace App\Mails\Entity;

use App\Mails\Entity\AbstractSender;
use PHPMailer\PHPMailer\PHPMailer;

class NotificationSender extends AbstractSender
{
    public const EMAIL_TYPE = 'Notification';
}
