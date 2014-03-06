<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>File Save</title>
</head>
<body>
    <?php
        $fileName = "names.txt";
        $fp = fopen($fileName, 'w') or die ("Can't open the file");
        $name = array("Mark", "Kevin", "Jan", "Tom" ,"Jarrad", "Mary", "Rose");
        for($i=0; $i< count($name); $i++)
        {
            fwrite($fp, $name[$i] . "\n");
        }
        fwrite($fp , "###END OF NAMES LIST###\n");
        
        fclose($fp);
        print("List of names saved.");
    ?>
</body>
</html>