<?php

namespace Realisation\Mails;

class EmailSender
{
    public function send($to)
    {        
        $result = mail($to, "Test", "Test works");
        return $result;
    }

    public function sendHello($to)
    {
        $result = mail($to, "Hello!", "Hello works");
        return $result;
    }   

    public function sendReminder($to)
    {
        $result = mail($to, "Reminder!", "Reminder works");
        return $result;
    }

    public function sendNotification($to)
    {
        $result = mail($to, "Notification!", "Notification works");
        return $result;
    }
}
