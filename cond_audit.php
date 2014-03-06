<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Checking Your age</title>
</head>
<body>
    <?php
        $age = $_REQUEST['age'];
        $citizen = $_REQUEST['citizen'];
        
        if($age >= 18 && $citizen=="true")
        {
            print("<strong>You are eligible to vote</strong>");
            
        }
    ?>
</body>
</html>
