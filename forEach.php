<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>For Each Loops</title>
</head>
<body>
    <?php
        $gpas;
        $gpas["Fred"] = 3.62;
        $gpas["Mary"] = 2.75;
        $gpas["Jan"] = 4.00;
        $gpas["Jason"] = 2.10;
        $gpas["Mark"] = 2.87;
        
        $totalGpa = 0;
        
        foreach ($gpas as $key => $value)
        {
            print("Name: " . $key);
            print("<br/>GPA: " . $value);
            print("<br/>");
            $totalGpa += $value;
        }
        
        print("Total GPA: " . $totalGpa);
        $average = $totalGpa / count($gpas);
        print("<br/>Average GPA: " . $average);
        
    ?>
</body>
</html>
