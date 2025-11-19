<?php


declare(strict_types=1);

namespace App\Mails;

use App\Mails\Entity\HelloSender;
use App\Mails\Entity\NotificationSender;
use App\Mails\Entity\ReminderSender;
use App\Mails\Entity\TestSender;

class EmailInvoker
{
    private $strategy;

    public function setStrategy($strategy): void
    {
        $this->strategy = $strategy;
    }

    public function gen(): iterable
    {
        $this->setStrategy(new TestSender());
        yield 'Test';
        $this->setStrategy(new HelloSender());
        yield 'Hello';
        $this->setStrategy(new ReminderSender());
        yield 'Reminder';
        $this->setStrategy(new NotificationSender());
        yield 'Notification';
    }

    public function __invoke($to): void
    {
        $this->strategy->send($to);
    }
}
