<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Read a File</title>
</head>
<body>
    <?php
        
        
        $file = "badPoem.txt";
        $fp = fopen($file, 'r');
        /*
        $string = fread($fp, filesize($file));
        fclose($fp);
        
        $string = file_get_contents($file, true);
        echo($string);
    
        $string = fgets($fp);
        echo ($string);
        */
        $string = "";
        while(!feof($fp))
        {
            $string .= fgets($fp, 256);
            $string .= "<br/>";
        }
        
        print ($string);
        
    ?>
</body>
</html>
