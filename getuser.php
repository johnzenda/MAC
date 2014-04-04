<?php
$q = ($_GET['q']);

 $con = mysqli_connect("localhost","root","super99","simplecms481");
 if (!$con)
   {
   die('Could not connect: ' . mysqli_error($con));
   }

 //mysqli_select_db($con,"ajax_demo");
 $sql="SELECT * FROM employeedata WHERE eenumber = '".$q."'";

 $result = mysqli_query($con,$sql);


 echo "<table border='1'>
 <th>Firstname</th>
 <th>Lastname</th>
 <th>Employee#</th>
 <th>Vacation Time</th>
 <th>Sick Time</th>
 </tr>";


 while($row = mysqli_fetch_array($result))
  {
   echo "Welcome " . $row['firstname'] . " !";
   echo "<br></br>";
   echo "<tr>";
   echo "<td>" . $row['firstname'] . "</td>";
   echo "<td>" . $row['lastname'] . "</td>";
   echo "<td>" . $row['eenumber'] . "</td>";
   echo "<td>" . $row['vacation'] . "</td>";
   echo "<td>" . $row['sick'] . "</td>";
   echo "</tr>";
   }
 echo "</table>";
 echo "<br></br>";
 echo "<p></p>";

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
