<?php

declare(strict_types=1);

namespace App\Mails;

use App\Mails\Entity\HelloSender;
use App\Mails\Entity\NotificationSender;
use App\Mails\Entity\ReminderSender;
use App\Mails\Entity\TestSender;
use App\Mails\Interface\EmailInterface;
use PHPMailer\PHPMailer\PHPMailer;

class EmailInvoker
{
    /**
     * @var EmailInterface
     */
    private $strategy;
    private PHPMailer $mailer;

    public function __construct()
    {
        $this->loadEnvFile();
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

        $mailClient = $this->getEnv('MAIL_CLIENT');
        $smtpHost = $this->getEnv('SMTP_HOST');
        $smtpPort = $this->getEnv('SMTP_PORT');

        $this->mailer->isSMTP();
        $this->mailer->Host = $smtpHost;
        $this->mailer->Port = (int)$smtpPort;

        $this->mailer->setFrom('test@example.com', 'Test Sender');
    }

    private function loadEnvFile(): void
    {
        $envPath = __DIR__ . '/../../.env';

        if (file_exists($envPath)) {
            $lines = file($envPath);
            if (is_array($lines)) {
                foreach ($lines as $line) {
                    $line = trim($line);
                    if (strpos($line, '#') === 0 || empty($line)) {
                        continue;
                    }

                    if (strpos($line, '=') !== false) {
                        list($key, $value) = explode('=', $line, 2);
                        $key = trim($key);
                        $value = trim($value, '"\'');

                        putenv("$key=$value");
                    }
                }
            }
        } else {
            printf('Env file not found at: $envPath<br>');
        }
    }

    private function getEnv(string $key): string
    {
        $value = getenv($key);
        return $value !== false ? $value : 'Error with .env file';
    }

    /**
     * @param EmailInterface $strategy
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
