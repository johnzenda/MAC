<?php session_start(); 
//error_reporting(0);
//include("Includes/header.php");
 $con=mysqli_connect("localhost","root","super99","simplecms481");
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   $sql="

CREATE TABLE jqcalendar (
  Id int(11) NOT NULL auto_increment,
  Subject varchar(1000) character set utf8 default NULL,
  Location varchar(200) character set utf8 default NULL,
  Description varchar(255) character set utf8 default NULL,
  StartTime datetime default NULL,
  EndTime datetime default NULL,
 IsAllDayEvent smallint(6) NOT NULL,
  Color varchar(200) character set utf8 default NULL,
  RecurringRule varchar(500) character set utf8 default NULL,
  PRIMARY KEY  (Id))";

  if (mysqli_query($con,$sql))
  {
      echo "Table jqcalendar created successfully";
  }
  else
  {
      echo "error creating table";
  }
  ?> 
<!DOCTYPE html>
<html>
    <head>
    
       
    </head>
    <body>
</body>
</html>