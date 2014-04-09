<?php session_start(); 
error_reporting(0);
include("Includes/header.php");
 $con=mysqli_connect("localhost","root","super99","simplecms481");
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
  
      //$id = $_POST['number'];
      $id =  $_SESSION['newnumber'];

       $result = mysqli_query($con,"SELECT * FROM employeedata WHERE eenumber = $id");
$vacationt = $_POST['vacationtime'];
$sickt = $_POST['sicktime'];
 while($row = mysqli_fetch_array($result))
 {
$currentvac = $row['vacation'];
$currentsic = $row['sick'];
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
     <hr>
        <div><iframe src="wdCalendar/sample.php" width="45%" height="700px" id="frame" seamless></iframe></div>
        <div><p>You are currently modifying employee number <?php echo $id;?>!</p>
            <p>Vacation Time = <?php echo $currentvac; ?>&nbsp; hours</p>
            <p>Sick Time = <?php echo $currentsic; ?>&nbsp; hours</p></div>     
          <form style="font-size: x-large; font-family:verdana" action="updateusertwo.php" method="post">
             <table style="color: #000"><tr><td style=" color: #000">
                 <tr><td style=" color: #000">    
   Enter Employee Vacation Time:
               </td><td>
              <input style="font-size: medium" placeholder="Enter Time (Hours)"  type="text" name="vacationtime"></td></tr>
                <tr><td style=" color: #000">   
   Enter Employee Sick Time:
               </td><td>
              <input style="font-size: medium" placeholder="Enter Time (Hours)" type="text" name="sicktime"></td></tr>
                 </table><br>
              <button style="background-color: #ff006e; height: 60px; border-radius: 5px; font-family: Verdana; color: #434343; font-size: large" name ="Submit1" onclick="getSelection('post')">Subtract Hours</button>&nbsp;&nbsp;&nbsp;
              <button style="background-color: #b6ff00; height: 60px; border-radius: 5px; font-family: Verdana; color: #434343; font-size: large" name ="Submit2" onclick="getSelection('post')">&nbsp;&nbsp;&nbsp;Add Hours&nbsp;&nbsp;&nbsp;</button><br><br>
              <p style =" font-size: smaller">Click here to set these as the new hours&nbsp;&nbsp;&nbsp;<button style="background-color: #ffd800; height: 60px; border-radius: 5px;  font-family: Verdana; color: #434343; font-size: large" name ="Submit3" onclick="getSelection('post')">Set As New Hours</button></p>
              
 
 </form>     
          <br></br>
        <?php

     if (isset($_POST['Submit1']))
     {
 
$sql = "UPDATE employeedata SET";
$moresql = '';

if(isset($vacationt) && !empty($vacationt)) {
    if ($moresql) $moresql .= ',';
    $moresql .= " vacation = vacation - '$vacationt'";    
}

if(isset($sickt) && !empty($sickt)) {
    if ($moresql) $moresql .= ',';
    $moresql .= " sick = sick - '$sickt'";  
}

$sql .= $moresql;
$sql .= " WHERE eenumber = '$id'";

if(!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($con));
}
echo "Employee '$id' has been updated!";
 echo "<br></br>";
$valueone = $currentvac - $vacationt;
$valuetwo = $currentsic - $sickt;
echo "New Vacation is $valueone and New Sick is $valuetwo!";
     }

?>
        <?php

     if (isset($_POST['Submit2']))
     {
 
$sql = "UPDATE employeedata SET";
$moresql = '';

if(isset($vacationt) && !empty($vacationt)) {
    if ($moresql) $moresql .= ',';
    $moresql .= " vacation = vacation + '$vacationt'";    
}

if(isset($sickt) && !empty($sickt)) {
    if ($moresql) $moresql .= ',';
    $moresql .= " sick = sick + '$sickt'";  
}

$sql .= $moresql;
$sql .= " WHERE eenumber = '$id'";

if(!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($con));
}
echo "Employee '$id' has been updated!";
 echo "<br></br>";
$valueone = $currentvac + $vacationt;
$valuetwo = $currentsic + $sickt;
echo "New Vacation is $valueone and New Sick is $valuetwo!";
     }

?>
       <?php

     if (isset($_POST['Submit3']))
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
 echo "<br></br>";
 $valueone = $vacationt;
$valuetwo = $sickt;
echo "New Vacation is $valueone and New Sick is $valuetwo!";
     }
?>
    </body>
</html>
