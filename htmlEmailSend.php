<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>HTML Email</title>
</head>
<body>
    <?php
      $to = "mark@learntoprogram.tv";
      $from = "ernie@learntoprogram.tv";
      $subject = "HTML Test Email";
      
      $headers = "From: " . $from . "\r\n";
      $headers = "Repy-To " . $from . "\r\n";
      $headers = "MIME-Version : 1.0\r\n";
      $headers = "Content-Type: text/html; charset=ISO-8859-1\r\n";
      
      $message = "<html><body>";
      $message = "<h1>Information From Me</h1>";
      $message = "<p><strong>It's time to Act!</strong></p>";
      
      mail($to, $subject, $message, $headers);
    ?>
</body>
</html>
