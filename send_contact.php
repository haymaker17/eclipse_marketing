<?php
    error_reporting(E_NOTICE);
    function valid_email($str)
    {
        return ( ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
    }
    if($_POST['name']!='' && $_POST['email']!='' && valid_email($_POST['email'])==TRUE && strlen($_POST['comment'])>1)
    {
        $to = "dave.desimone@eclipsemarketing.com";
        $headers =  'From: '.$_POST['email'].''. "\r\n" .
                'Reply-To: '.$_POST['email'].'' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
        $subject = "A new contact form submission...";
       
        $message = "You have received a message via your website:\r\n\r\n";
        $message .= "==================================================\r\n";
        $message .= "Name: " . htmlspecialchars($_POST['name']) . "\r\n";
        $message .= "Company: " . htmlspecialchars($_POST['company']) . "\r\n";
        $message .= "Email: " . $_POST['email'] . "\r\n";
        $message .= "Phone: " . $_POST['phone'] . "\r\n";
        /* $message .= "Option: " . $_POST['option'] . "\r\n"; */
        $message .= "Comment:\r\n\r\n" . htmlspecialchars($_POST['comment']) . "\r\n";
        $message .= "==================================================\r\n\r\n";
        $message .= "If you hit 'reply', you will reply to the author.\r\n\r\n";
       
        if(mail($to, $subject, $message, $headers, '-fEMAIL@DOMAIN.COM'))
        {
            echo 1; //SUCCESS
        }
        else {
            echo 2; //FAILURE - server failure
        }
    }
    else {
        echo 3; //FAILURE - not valid email
    }
?>