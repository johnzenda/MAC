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
$firstnm = $_POST['firstn'];
$lastnm = $_POST['lastn'];
$startdt = $_POST['startd'];
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
        <p style="font-size: large">Please fill out all of the fileds below.</p>
        
          <form style="font-size: x-large; font-family:verdana" action="adduser.php" method="post">
             <table style="color: #000">
                 <tr><td style=" color: #000">
   Enter Employee Number:
              </td><td>
                     <input style="font-size: medium" placeholder="Enter Employee Number" type="text" name="number">
                 </td></tr>
                 <tr><td style=" color: #000">
   Enter First Name:
              </td><td>
                     <input style="font-size: medium" placeholder="Enter First Name" type="text" name="firstn">
                 </td></tr>
                 <tr><td style=" color: #000">
   Enter Last Name:
              </td><td>
                     <input style="font-size: medium" placeholder="Enter Last Name" type="text" name="lastn">
                 </td></tr>
                 <tr><td style=" color: #000">
   Enter Start Date:
              </td><td>
                     <input style="font-size: medium" placeholder="YYYY-MM-DD" type="text" name="startd">
                 </td></tr>
                 <tr><td style=" color: #000">    
   Enter Employee Vacation Time:
               </td><td>
              <input style="font-size: medium" placeholder="Enter Time (Hours)"  type="text" name="vacationtime">
                 </td></tr>
                <tr><td style=" color: #000">   
   Enter Employee Sick Time:
               </td><td>
              <input style="font-size: medium" placeholder="Enter Time (Hours)" type="text" name="sicktime">
                </td></tr>
                 </table>
        <button  name ="Submit1" onclick="getSelection('post')">Update Employee</button>
               
 </form>
         
          <br></br>
        <?php

     if (isset($_POST['Submit1']))
     {
/*$sql = "UPDATE employeedata SET";
$moresql = '';

if(isset($vacationt) && !empty($vacationt)) {
    if ($moresql) $moresql .= ',';
    $moresql .= " vacation = '$vacationt'";    
}

if(isset($sickt) && !empty($sickt)) {
    if ($moresql) $moresql .= ',';
    $moresql .= " sick = '$sickt'";  
}*/
$sql="INSERT INTO employeedata (eenumber, firstname, lastname, vacation, sick, startdate) VALUES ('$id', '$firstnm', '$lastnm', '$vacationt', '$sickt', '$startdt')";

//$sql .= $moresql;
//$sql .= " WHERE eenumber = '$id'";

if(!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($con));
}
echo "New Employee $firstnm , $lastnm has been added!";

     }

?>
    </body>
</html>
