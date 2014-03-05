<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Associative Arrays</title>
</head>
<body>
    <?php
        //Declare the Array
        $gpas = array(
                    "Smith" => 3.25,
                    "Johnson" => 3.1,
                    "Blackstone" => 2.5,
                    "Craigson" => 1.77,
                    "Garcia" => 4.0,
                    "Wendell" =>3.11
            
                );
        
        print("Eric Smith has a gpa of " . $gpas["Smith"] . "<br/>");
        print("Fred Garcia has a gpa of " . $gpas["Garcia"]);
    ?>
</body>
</html>
