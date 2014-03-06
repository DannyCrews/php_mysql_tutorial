<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Complex Conditionals</title>
</head>
<body>
    <?php
        $age = 37;
        $citizen = false;
        
        if($age >= 18 && $citizen)
        {
            print("<strong>You are eligible to vote</strong>");
        } else
        {
            print("<strong>You are not eligible to vote.</strong>");
        }
        
        
    ?>
</body>
</html>
