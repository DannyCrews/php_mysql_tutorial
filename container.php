<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Display included data</title>
</head>
<body>
    <?php
        print("Printed from container.php");
        print("<br/>");
        include_once("includeMe.php");
        include("includeMe.php");
        include("includeMe.php");
        include("includeMe.php");
        
    ?>
</body>
</html>
