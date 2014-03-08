<?php
    
    print(date("D F d, Y h:i:s"));
    print("<br/>");
    
    print(mktime());
    
    $thirtyDays = 60 * 60 * 24 * 30;
    
    print("<br/>30 days from right now: " . (mktime()+ $thirtyDays));
    print("<br/>30 days from right now: " . (date("D F d, Y h:i:s",mktime()+ $thirtyDays)));
    
    $twelveHours = 60 * 60 *12;
    
    print("<br/>12 Hours from now: " . (date("D F d, Y h:i:s", mktime() + $twelveHours)));

?>