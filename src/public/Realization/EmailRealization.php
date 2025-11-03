<?php    
    require_once 'Mails/EmailSender.php';
    use App\Mail\EmailSender;
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send_email'])) 
        {
        $email = new EmailSender();
        $result = $email->send('test@example.com');

        if ($result) 
        {
            echo "Email sent successfully!<br>";
        } else 
        {
            echo "Failed to send email.<br>";
        }
        
        echo "<a href='../index.php'>Back</a>";
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send_hello'])) 
        {
        $email = new EmailSender();
        $result = $email->sendHello('test@example.com');

        if ($result) 
        {
            echo "Email sent successfully!<br>";
        } else 
        {
            echo "Failed to send email.<br>";
        }

        echo "<a href='../index.php'>Back</a>";
        exit;
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send_reminder'])) 
        {
        $email = new EmailSender();
        $result = $email->sendReminder('test@example.com');

        if ($result) 
        {
            echo "Email sent successfully!<br>";
        } else 
        {
            echo "Failed to send email.<br>";
        }
        
        echo "<a href='../index.php'>Back</a>";
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send_notification'])) 
    {   
        $email = new EmailSender();
        $result = $email->sendNotification('test@example.com');

        if ($result) 
        {
            echo "Email sent successfully!<br>";
        } else 
        {
            echo "Failed to send email.<br>";
        }
        
        echo "<a href='../index.php'>Back</a>";
        exit;
    }
?>

<form method="POST" action="">
    <button type="submit" name="send_email">Send Test Email</button>
    <button type="submit" name="send_hello">Send Hello Email</button>
    <button type="submit" name="send_reminder">Send Reminder Email</button>
    <button type="submit" name="send_notification">Send Notification Email</button>
</form>