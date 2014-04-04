<?php 
include("Includes/header.php");
 $con=mysqli_connect("localhost","root","super99","simplecms481");
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }




 //$orderfield = isset ($_POST['order']) ? $_POST['order'] : "";
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
        <h1 style="font-family: Verdana; color: #0094ff; font-style: italic">Welcome Maxum Employee</h1>
     <hr><br></br>
          <form style="font-size: x-large";font-family:verdana;color:red" action="Combined.php" method="post">
   Enter Employee Number:<input style="font-size: medium" type="text" name="number">
        <button  name ="Submit1" onclick="getSelection('post')">Find Me</button>
   <!--<input type="submit" name="Search">-->
 </form>
          <br></br>

 <?php
     //$eenumber = isset ($_POST['eenumber']) ? $_POST['eenumber'] : "";

      $result = mysqli_query($con,"SELECT * FROM employeedata WHERE eenumber = '$_POST[number]'");
//$mystartdate = strtotime($result->startdate);
if (isset($_POST['Submit1']))
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

 echo "</table>";
 {
 echo "<table class=\"thfloat\">
 <tr>
  <th class=\"red\">Vacation Time</th>
 <th class=\"green\">Sick Time</th>
 </tr>";
 }
   {
   //echo "<br></br>";
   echo "<tr>";
   echo "<td class=\"red\">" . $row['vacation'] . "</td>";
   echo "<td class=\"green\">" . $row['sick'] . "</td>";
   echo "</tr>"; 
      echo "<br></br>";
   }
 echo "</table>";
}
echo "<br></br>";
echo "<br></br>";
echo "<br></br>";
echo "<br></br>";
echo "<div id=\"main\"><ol class=\"round\"><li class=\"asterisk\"><div>Values depicted represent total hours on record. For additional infomation please contact HR directly at 310-356-2777.</div></li><ol></div>";
}

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
