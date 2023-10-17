<?php

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    $emai_from = 'info@Yourwebsite.com';
    
    $email_subject = 'New form submission';

    $email_body = "User Name: $name.\n",
                  "User email: $visitor_email.\n"
                  "subject: $subject.\n"
                  "User Message: $message.\n";
    
    $to = "harshpanchal1243@gmail.com";

    $headers = "From: $email_from \r\n";
    
    $headers .= "Reply-To: $visitor_email";

    mail($to,$email_subject,$headers);

    header("Location: contact.html");

     

?>