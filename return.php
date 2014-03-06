<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <?php
        //Functions Section
        function double($value)
        {
            $value = $value * $value;
            return ($value);
        }
    ?>
    <title><!-- Insert your title here --></title>
</head>
<body>
    <?php
        //Function Calls
        
        print("The value of 25.55 doubled is " . double(25.55));
        
        $result = double(37);
        print("<br/>The result is " . $result);
        
        $a = 45;
        $b = 57.25;
        $c = 18;
        
        $result2 = double($a+$b)/ $c * double($a/$b/$c) + double(double($a));
        print("<br/>Result 2 is: " . $result2);
        
        print("<br/>" . strtoupper("this is in lowercase"));
    
    ?>
</body>
</html>
