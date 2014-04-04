<?php
 $con=mysqli_connect("localhost","root","super99","simplecms481");
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

 $result = mysqli_query($con,"SELECT * FROM employeedata WHERE eenumber = '234088'");

 echo "<table border='1'>
 <tr>
 <th>Firstname</th>
 <th>Lastname</th>
 </tr>";

while($row = mysqli_fetch_array($result))
   {
   echo "<tr>";
   echo "<td>" . $row['firstname'] . "</td>";
   echo "<td>" . $row['lastname'] . "</td>";
   echo "</tr>";
   }
 echo "</table>";

 mysqli_close($con);
 ?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
