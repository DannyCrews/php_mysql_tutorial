<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Loops</title>
</head>
<body>
    <?php
        
        $i = 105;
        while($i < 101)
        {
            print($i);
            print("<br/>");
           $i +=10;
        }
        
        /*
        $airlines = array("American", "Southwest", "Delta", "US Airways", "United", "jetBlue", "Frontier");
        
        
        
        $x = 0;
        while($x< count($airlines))
        {
            print($airlines[$x]);
            print("<br/>");
            $x++;
        }
        */
        
        $y=100;
        do
        {
            print($y);
            print("<br/>");
            $y++;
        } while ($y < 35);
        
        
        
    ?>
</body>
</html>
