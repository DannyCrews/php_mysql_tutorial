<?php

require_once("db_connect.php");

$sql = "SELECT empId, lastName, firstName, departmentName, position, salary FROM employee, departments WHERE department = deptId";
$result = mysql_query($sql) or die(mysql_error());
echo("<table border='1'>");
echo("<tr><th>Id</th><th>Last Name</th><th>FirstName</th><th>Department</th><th>Job Title</th><th>Salary</th><th>Delete</th><th>Update</th></tr>");
while($row = mysql_fetch_array($result)){
echo("<tr>");

echo "<td>" . $row['empId'] . "</td>"
    ."<td>" . $row['lastName'] . "</td>"
    ."<td>" . $row['firstName'] . "</td>"
    ."<td>" .  $row['departmentName'] . "</td>"
    . "<td>" .  $row['position'].  "</td>"
    . "<td>" . $row['salary'] . "</td>"
    . "<td><a href='delete.php?id=" . $row['empId']  . "'>Delete</a></td>" .
    "<td><a href='update.php?id=" . $row['empId'] .   "'>Update</a></td>";


echo '</tr>';

}

echo("</table>");
?>