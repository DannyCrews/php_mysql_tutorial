<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Ternary</title>
</head>
<body>
    <?php
        $age = 5;
        
        $voteString = ($age >= 18) ? "can vote" : "can't vote";
        
        print ($voteString);
        
        $testScore = 40;
        
        $pass = ($testScore >= 60) ? true : false;
        
        print ("<br/>");
        print ($pass);
        
        
    ?>
</body>
</html>
