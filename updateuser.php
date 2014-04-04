<?php 
error_reporting(0);
include("Includes/header.php");
 $con=mysqli_connect("localhost","root","super99","simplecms481");
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
      $id = $_POST['number'];
$vacationt = $_POST['vacationtime'];
$sickt = $_POST['sicktime'];
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
        <p style="font-size: large">Please enter the employees number followed by the new value(s) for vacation and/or sick time.</p>
        
          <form style="font-size: x-large; font-family:verdana" action="updateuser.php" method="post">
             <table style="color: #000"><tr><td style=" color: #000">
   Enter Employee Number:
              </td>
                 <td>
                     <input style="font-size: medium" placeholder="Enter Employee Number" type="text" name="number"></td></tr>
                 <tr><td style=" color: #000">    
   Enter Employee Vacation Time:
               </td><td>
              <input style="font-size: medium" placeholder="Enter Time (Hours)"  type="text" name="vacationtime"></td></tr>
                <tr><td style=" color: #000">   
   Enter Employee Sick Time:
               </td><td>
              <input style="font-size: medium" placeholder="Enter Time (Hours)" type="text" name="sicktime"></td></tr>
                 </table>
        <button  name ="Submit1" onclick="getSelection('post')">Update Employee</button>
               
   <!--<input type="submit" name="Search">-->
 </form>
         
          <br></br>
        <?php

     if (isset($_POST['Submit1']))
     {
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

     }

?>
    </body>
</html>
