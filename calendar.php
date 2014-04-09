<?php 
error_reporting(0);
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
        <h1 style="font-family: Verdana; color: #0094ff; font-style: italic">Welcome Maxum Employee</h1> <hr>
        <div><iframe src="wdCalendar/sample.php" width="45%" height="700px" id="frame" seamless></iframe></div>
    
        <table style="width: 50%; border-style: outset; border-color: #f1eded"><tr><td style="background-color: #fff"><img src="images/logo-maxum.jpg" style="margin-left: 35%; margin-right: 30%; background-color: #0094ff" alt="Maxum Logo"></td></tr></table><br><br>
        <div style="font-family: Stencil, Verdana; font-size: x-large; color: #336699;  ">Corporate Calendar</div><br>
          <div style="font-family: Verdana; color: #808080; font-size: medium">Corporate Calendar events are updated regularly and as part of a community contribution.  Employees are encouraged to add important events that may affect us all!</div>
          <br>
          <div><img style="box-shadow: 10px 10px 10px 5px grey" src="images/California-oil-rig.jpg" alt="rig"></div>    
        <!--<div style="background-color: #fff">-->
        
    </body>
</html>
