<?php

    $mySiteEmail = "levi.stecker@creativedge-us.com";
    $to = "creativedge.levi@gmail.com";
    $subject = "New Message from Website";

    
    if(isset($_POST['submit_message'])) {
        // $subject = $_POST['subject'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $headers = "From: Contact Form <" . $mySiteEmail . ">" . "\r\n";
        $headers .= "Reply-To: " . $name . " <" . $email .">" . "\r\n";
        
        echo 'Your message was sent successfully!';
        mail($to, $subject, $message, $headers);
    } else {
        echo 'An error has occurred!';
    }
?>