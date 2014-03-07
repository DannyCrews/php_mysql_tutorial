<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Send Some Mail</title>
</head>
<body>
    <php
        $to = "mark@learntoprogram.tv";
        $subject = "Feedback for you";
        $message = "This is a test email from the PHP class";
        $message .= "from LearnToProgram.tv";
        $from = "ernie@learntoprogram.tv";
        $headers = "From:" . $from;
        mail($to, $subject, $message, $headers);
        echo("Mail has been sent.");
        
        
    ?>
</body>
</html>
