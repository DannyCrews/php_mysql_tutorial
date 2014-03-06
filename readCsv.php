<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Parts</title>
</head>
<body>
    <?php
        $file = "parts.csv";
        $fp = fopen($file, "r");
        
        $output = "";
        while(!feof($fp))
        {
            $inventory = fgetcsv($fp, 1024);
            $line = "";
            $line .= "<tr>";
            $line .= "<td>" . $inventory[0] . "</td>";
            $line .= "<td>" . $inventory[1] . "</td>";
            $line .= "<td>" . $inventory[2] . "</td>";
            $line .= "<td>" . $inventory[3] . "</td>";
            $line .= "</tr>";
            $output .= $line;
        }
        
        print("<table border='1'>");
        print($output);
        print("</table>");
    ?>
</body>
</html>
