<?php
  
    $name = "Mark";
    
    echo("My name is $name");
    echo('<br/>My name is $name');
    echo("<br/>");

$poem = <<<TEST
Roses are Red<br/>
Violets are Blue<br/>
I'm no fan of Heredocs<br/>
But you might be too<br/>
<br/>
TEST;

echo($poem);

print_r(str_split($name));
print("<br/>");
print(strrev("Wheel of Fortune"));
print("<br/>");
print(substr($poem, 0, 40));
print("<br/>");
print(crypt($poem));

?>