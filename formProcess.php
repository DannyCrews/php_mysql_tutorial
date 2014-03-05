<?php
    $name = $_REQUEST['dogName'];
    $age = $_REQUEST['dogAge'];
    
    echo("Your dog is named " . $name . " and your dog is " . $age . " human years old.");
    
    $dogAge = $age * 7;
    
    echo("<br/>Your dog is " . $dogAge . " in dog years.");
?>