<?php
<?php
 $con=mysqli_connect("localhost","root","super99","simplecms481");
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

?>

<!DOCTYPE html>
<html style="height: 100%" lang="en">
    <head>
        <meta charset="utf-8" />
        <title>
        </title>
        <link href="/Styles/Site.css" rel="stylesheet" type="text/css" />
    </head>
    <body style="background-color: #fff;
    color: #434343;
    font-size: .85em;
    font-family: Segoe UI, Verdana, Helvetica, Sans-Serif;
    height: 100%;">
        <br></br>
        <h1 style="font-family: Verdana; color: #0094ff; font-style: italic">Welcome HR Admin</h1>
     <hr><br></br>
          <form style="font-size: x-large";font-family:verdana;color:red" action="insert.php" method="get">
   Enter Employee Number:<input style="font-size: medium" type="text" name="number">
        <button  name ="Submit1" onclick="getSelection('get')">Find Me</button>
   <!--<input type="submit" name="Search">-->
 </form>
         <?php
     //$eenumber = isset ($_POST['eenumber']) ? $_POST['eenumber'] : "";

      $result = mysqli_query($con,"SELECT * FROM employeedata WHERE eenumber = '$_GET[number]'");
//$mystartdate = strtotime($result->startdate);
if (isset($_GET['Submit1']))
{
 echo "<table border='0'>
 <tr>
 <th id=\"grey\">Firstname</th>
 <th class=\"grey\">Lastname</th>
 <th class=\"grey\">Employee#</th>
 <th class=\"grey\">Start Date</th>
 </tr>";

 while($row = mysqli_fetch_array($result))
   {
   echo "<div id=\"grey\">Welcome " . $row['firstname'] . " !</div>";
   echo "<br></br>";
   echo "<tr>";
   echo "<td id=\"grey\">" . $row['firstname'] . "</td>";
   echo "<td class=\"grey\">" . $row['lastname'] . "</td>";
   echo "<td class=\"grey\">" . $row['eenumber'] . "</td>";
   echo "<td class=\"grey\">" . $row['startdate'] . "</td>";
   echo "</tr>";
   }
   echo "</table>";
}
    mysqli_close($con);
 ?> 
    </body>
</html>
