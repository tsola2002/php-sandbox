<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
    <h1>Emails</h1>
    <?php

    $to = "omatsolasobotie@gmail.com";
    $subject = 'HELLO FROM PHP';
    $message = 'This is a test email sent from PHP.';

    $headers = 'From: sender@example.com' . "\r\n" .
    'Reply-To: sender@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo 'Email sent successfully.';
    } else {
        echo 'An error occurred while sending the email.';
    }


    ?>
</body>
</html>