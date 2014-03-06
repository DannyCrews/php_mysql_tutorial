<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Appending to a File</title>
</head>
<body>
    <?php
        $file = "airlines.txt";
        $fp = fopen($file, 'a') or die ("Can't open file");
        
        $airline1 = "USAirways";
        $airline2 = "Frontier";
        
        fwrite($fp, $airline1 . "\n");
        fwrite($fp, $airline2.  "\n");
        
        unlink("example.txt");
        
        print("Airline file writte and example file deleted.");
        
    ?>
</body>
</html>
