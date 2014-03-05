<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd"
    >
<html lang="en">
<head>
    <title>Multi Dimensional</title>
</head>
<body>
    <?php
        $teams = array
        (
            "Yankees" => array
                (
                    "Rivera",
                    "Jeter",
                    "Granderson",
                    "Sabathia",
                    "Gardner"
                ),
            "Mets" => array
                (
                    "Dickey",
                    "Acosta",
                    "Pelfrey"
                ),
            "Red Sox" => array
                (
                    "Ortiz",
                    "Bard",
                    "Buckholz",
                    "Beckett"
                )
        );
        
        echo($teams['Red Sox'][0]);
        echo("<br/>");
        echo($teams['Yankees'][3]);
        
    ?>
</body>
</html>
