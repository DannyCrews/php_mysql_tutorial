<html>
    <head>
        <title>Operator</title>
    </head>
    <body>
        <?php
            
            $x = 12.55;
            $y = 13;
            
            $z = $x + $y;
            
            echo($x . " + "  . $y . " = " . ($x + $y));
            echo("<br/>");
            echo($x . " - "  . $y . " = " . ($x - $y));
            echo("<br/>");
            echo($x . " * "  . $y . " = " . ($x * $y));
            echo("<br/>");
            echo($x . " / "  . $y . " = " . ($x / $y));
            echo("<br/>");
            echo(9%3);
            echo("<br/>");
            echo(10%3);
            echo("<br/>");
            echo(11%3);
            
            $x++;
            $y--;
            echo("<br/>");
            echo("x: "  . $x . " y: " . $y);
            
            $poem = "Roses are red, voilets are blue";
            $poem .= "<br/>PHP is fun and so are you";
            echo("<br/>");
            echo $poem;
            
            $operand1 = 17;
            $operand2 = 13;
            
            $operand2 -=$operand1;
            echo("<br/>");
            echo($operand2);
            
        ?>
    </body>
</html>