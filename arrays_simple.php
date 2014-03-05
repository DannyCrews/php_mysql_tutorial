<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Simple Arrays</title>
</head>
<body>
    <?php
        $family = array("Mark", "Joan", "Rick", "Brett", "Kerry", "Kevin");
        
        $vehicles[0] = "car";
        $vehicles[1] = "airplane";
        $vehicles[2] = "cruise ship";
        $vehicles[3] = "train";
        
        
        print($family[0] . " just purchased a new ". $vehicles[0]);
        print("<br/>");
        print($family[3] . " vacations on a " . $vehicles[2]);
        
        for($i = 0; $i < count($family); $i++)
        {
            print($family[$i]);
            print("<br/>");
        }
    ?>
</body>
</html>
