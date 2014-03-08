<?php
    
    $band = $_COOKIE['band'];
    $food = $_COOKIE['food'];
    
    print("Band: " . $band);
    print("<br/>Food: " . $food);
    if(isset($_COOKIE['name']))
    {
        print("<br/>Name cookie set");
    }
    else
    {
        print("<br/>No name cookie found.");
    }
    
    
?>