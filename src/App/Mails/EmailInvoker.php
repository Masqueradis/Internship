<?php

declare(strict_types=1);

namespace App\Mails;

use App\Mails\Entity\HelloSender;
use App\Mails\Entity\NotificationSender;
use App\Mails\Entity\ReminderSender;
use App\Mails\Entity\TestSender;
use App\Mails\Entity\AbstractSender;
use PHPMailer\PHPMailer\PHPMailer;

class EmailInvoker
{
    /**
     * @var AbstractSender
     */
    private $strategy;
    private PHPMailer $mailer;

    public function __construct()
    {
        $this->initializeMailer();
    }

    /**
     * @param string $to
     */
    public function __invoke($to): void
    {
        $this->strategy->send($to);
    }

    private function initializeMailer(): void
    {
        $this->mailer = new PHPMailer(true);

        $smtpHost = $_ENV['SMTP_HOST'];
        $smtpPort = $_ENV['SMTP_PORT'];

        $this->mailer->isSMTP();
        $this->mailer->Host = $smtpHost;
        $this->mailer->Port = (int)$smtpPort;

        $this->mailer->setFrom('test@example.com', 'Test Sender');
    }

    /**
     * @param AbstractSender $strategy
     */
    public function setStrategy($strategy): void
    {
        $this->strategy = $strategy;
    }

    /**
     * @return iterable<string>
     */
    public function gen(): iterable
    {
        $this->setStrategy(new TestSender($this->mailer));
        yield 'test@example.com';

        $this->setStrategy(new HelloSender($this->mailer));
        yield 'hello@example.com';

        $this->setStrategy(new ReminderSender($this->mailer));
        yield 'reminder@example.com';

        $this->setStrategy(new NotificationSender($this->mailer));
        yield 'notification@example.com';
    }
}
