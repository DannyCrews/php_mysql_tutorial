<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Variables</title>
</head>
<body>
    <?php
        $age = 37;                  //Value or Numerical Variable
        $name = "Mark Lassoff";     //String Variable
        $tax_rate = .06;             //Floating point number
        
        print($name);
        print("<br/>");
        print($age);
        print("<br/>");
        print($name . " is " . $age . " years old");      //Concatenation
        print("<br/>");
        printf("The tax rate in Connecticut is %0.2f", $tax_rate);
        
        $value = 37*3/14+25-6+.003/6;
        print("<br/>");
        print("Value: " . $value);
        
    ?>
</body>
</html>
