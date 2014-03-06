<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Conditional</title>
</head>
<body>
    <?php
        $age = 19;
        $citizen = false;        //Boolean
        /*
            Comparison Operators
            
            ==      Equivlency
            >       Greater Than
            <       Less Than
            >=      Greater than or Equal To
            <=      Less Than or Equal To
            !=      Not Equal To
            
            Compound Conditionals
            
            &&      and
            ||      Or
            
         
        */
        if($age >= 18  || $citizen == true)
        {
            print("<strong>You are eligible to vote!</strong>");
        }
    ?>
    
</body>
</html>
