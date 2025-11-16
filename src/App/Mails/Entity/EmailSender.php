<?php

namespace App\Mails\Entity;

class EmailSender
{
    public function send($to)
    {        
        $result = mail($to, 'Test', 'Test works');

        if ($result) {
            printf ('Test Email sent successfully!<br>');
        } else {
            printf ('Failed to send email.<br>');
        }
    }

    public function sendHello($to)
    {
        $result = mail($to, 'Hello!', 'Hello works');

        if ($result) {
            printf ('Hello Email sent successfully!<br>');
        } else {
            printf ('Failed to send email.<br>');
        }
    }   

    public function sendReminder($to)
    {
        $result = mail($to, 'Reminder!', 'Reminder works');

        if ($result) {
            printf ('Reminder Email sent successfully!<br>');
        } else {
            printf ('Failed to send email.<br>');
        }
    }

    public function sendNotification($to)
    {
        $result = mail($to, 'Notification!', 'Notification works');

        if ($result) {
            printf ('Notification Email sent successfully!<br>');
        } else {
            printf ('Failed to send email.<br>');
        }
    }
}
