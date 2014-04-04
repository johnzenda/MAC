<?php session_start(); 
error_reporting(0);
include("Includes/header.php");
 $con=mysqli_connect("localhost","root","super99","simplecms481");
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   $result = mysqli_query($con,"SELECT * FROM employeedata WHERE eenumber = '$_POST[number]'");
  // $sql = "SELECT * FROM employeedata";
  // $result = mysql_query($sql);
      $id = $_POST['number'];
$vacationt = $_POST['vacationtime'];
$sickt = $_POST['sicktime'];
//$newvac = $_POST['enterv'];
//$newsic = $_POST['enters'];

   ?>
<!DOCTYPE html>
<html style="height: 100%" lang="en">
    <head>
        <meta charset="utf-8" />
        <title>
        </title>
        <link href="/Styles/Site.css" rel="stylesheet" type="text/css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
</script>
<script>
 $(document).ready(function() {

 $('#hidden').hide(); //Initially form wil be hidden.

  $('#hide').click(function() {
   $('#hidden').show();//Form shows on button click

   });
 });
</script>
    </head>
    <body style="background-color: #fff;
    color: #434343;
    font-size: .85em;
    font-family: Segoe UI, Verdana, Helvetica, Sans-Serif;
    height: 100%;">
        <br></br>
        <h1 style="font-family: Verdana; color: #0094ff; font-style: italic">Welcome HR Admin</h1>
     <hr><br></br>
          <div style="font-size: x-large; font-family:verdana">
            <form style="font-size: x-large";font-family:verdana;color:red" action="" method="post">
   Enter Employee Number:<input style="font-size: medium" type="text" name="number">
        <button  name ="Submit1" onclick="getSelection('post')">Find Me</button>
   <!--<input type="submit" name="Search">-->
 </form>
          </div>
          <br></br>
 <?php 
     //$eenumber = isset ($_POST['eenumber']) ? $_POST['eenumber'] : "";

      //$result = mysqli_query($con,"SELECT * FROM employeedata WHERE eenumber = '$_POST[number]'");
//$mystartdate = strtotime($result->startdate);
if (isset($_POST['Submit1']))
{
 echo "<table border='0'>
 <tr>
 <th id=\"grey\">Firstname</th>
 <th class=\"grey\">Lastname</th>
 <th class=\"grey\">Employee#</th>
 <th class=\"grey\">Start Date</th>
 <th class=\"grey\">Vacation</th>
 <th class=\"grey\">Sick</th>
 </tr>";

 while($row = mysqli_fetch_array($result))
   {
  echo "<div id=\"grey\">Confirm " . $row['firstname'] . " Is The Correct Employee!</div>";
   echo "<br></br>";
   echo "<tr>";
   echo "<td id=\"grey\">" . $row['firstname'] . "</td>";
   echo "<td class=\"grey\">" . $row['lastname'] . "</td>";
   echo "<td class=\"grey\">" . $row['eenumber'] . "</td>";
   echo "<td class=\"grey\">" . $row['startdate'] . "</td>";
   echo "<td class=\"grey\">" . $row['vacation'] . "</td>";
   echo "<td class=\"grey\">" . $row['sick'] . "</td>";
   echo "</tr>";
 echo "</table>";
   }
}
 ?>
        <br></br>
        <button id="hide" style=" background-image:  url(images/continue.png); background-repeat: no-repeat; height: 50px; width: 190px; border: none"></button><hr>
        <div id="hidden">
        <p style=" font-family: Verdana; font-size: medium">Please enter the amount of hours to subtract from Vacation and/or Sick.</p>
                      <form style="font-size: x-large; font-family:verdana" action="" method="post">
             <table style="color: #000">
                 <tr><td style=" color: #000">    
   Enter Employee Vacation Time:
               </td><td>
              <input style="font-size: medium" placeholder="Enter Time (Hours)"  type="text" name="vacationtime"></td></tr>
                <tr><td style=" color: #000">   
   Enter Employee Sick Time:
               </td><td>
              <input style="font-size: medium" placeholder="Enter Time (Hours)" type="text" name="sicktime"></td></tr>
                 </table>
        <button  name ="Submit2" onclick="getSelection('post')">Update Employee</button>
 </form>
         
        </div>
                <?php
                 
     $newnumber = $id;    
      //$row = $result->fetch_array(MYSQLI_ASSOC);

 $vtime = $row["vacation"];
 $stime = $row["sick"];

 $totalv = ($vtime - $vacationt);
 $totals = ($stime - $sickt);   
       
 $sql = "UPDATE employeedata SET vacation='$totalv' WHERE eenumber='$newnumber'";
//$query = "SELECT * FROM employeedata WHERE eenumber = '$newnumber'";
// $result = $con->query($query);

// if (isset($_POST['Submit2']))
 // {
//  while($row = mysqli_fetch_array($result))
 //{
 //printf ("%s (%s)\n", $totalv, $totals);
// echo "<td class=\"grey\">" . $row['vacation'] . "</td>";
// }
 //$result  .= " WHERE eenumber = '$newnumber'";
 // }
    
   /* 
 
       
$sql = "UPDATE employeedata SET";
$moresql = '';

if(isset($vacationt) && !empty($vacationt)) {
    if ($moresql) $moresql .= ',';
    $moresql .= " vacation = '$vacationt'";    
}

if(isset($sickt) && !empty($sickt)) {
    if ($moresql) $moresql .= ',';
    $moresql .= " sick = '$sickt'";  
}

$sql .= $moresql;
$sql .= " WHERE eenumber = '$id'";
 //$result = mysqli_query("SELECT firstname FROM employeedata WHERE eenumber = '$id'");
 //print $result = mysqli_query($con,"SELECT firstname FROM employeedata WHERE eenumber = '$id'");
if(!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($con));
}
echo "Employee '$id' has been updated!";

     }*/
 
                    
echo $newnumber;
?>
    </body>
</html>
