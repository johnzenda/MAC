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
  <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>

      $(function () {

          $("#datepicker").datepicker();
         
      });

  </script>
  <link href="/Styles/Site.css" rel="stylesheet" type="text/css" />
    </head>
    <body style="background-color: #fff;
    color: #434343;
    font-size: .85em;
    font-family: Segoe UI, Verdana, Helvetica, Sans-Serif;
    height: 100%;">
        <br></br>
        <h1 style="font-family: Verdana; color: #0094ff; font-style: italic">Welcome Maxum Employee</h1> <hr><br>
         <div id="main" style="width: 100%; height: 580px; padding-right: 6%" class="jz"><ol class="round" style="width: 700px"><li class="asterisk">Please fill out the form completely and click the Submit button when finished.  Your submission will be sent directly to HR.
        Please do not submit this form more than one time per elligle period and not for more than one person.</li><li style="font-size: large; font-style: italic">To Qualify...</li><li style="text-shadow: 10px 10px 5px #808080">
             <img src="images/check2.png" alt="check"style="background-color: none; height: 5%; width: 5%"></img>The Employee must have completed 90 days of employment.</li><li style="text-shadow: 10px 10px 5px #808080; word-wrap: inherit">
             <img src="images/check2.png" alt="check"style="background-color: none; height: 5%; width: 5%"></img>Employee recognized should exemplify a positive work attitude and be in good standing.</li>
         <li style="text-shadow: 10px 10px 5px #808080">
             <img src="images/check2.png" alt="check"style="background-color: none; height: 5%; width: 5%"></img>Employee must not have received disciplinary warning within previous 12 month period.</li>
         <li style="text-shadow: 10px 10px 5px #808080">
             <img src="images/check2.png" alt="check"style="background-color: none; height: 5%; width: 5%"></img>Must not have any safety violations within 12 month period.</li></ol></div>
        <table style="width: 50%; border-style: outset; border-color: #f00; background-color: none; box-shadow: 10px 10px 10px 5px grey"><tr style="border-color: #fff; border: none"><td style="background-color: none">
            <img src="images/pilot.png" style="margin-left: 5%; margin-right: 25%" alt="Pilot Logo"></td><td style="background-color: none">
            <img src="images/pride.png" style="width: 30%; height: 30%; margin-left: 15%; padding-left: 19% " alt="Pride"></td><td style="background-color: none">
            <img src="images/logo-maxum.png" style="margin-left: 5%; margin-right: 45%; padding-left: 8% " alt="Maxum Logo">
        </td></tr>
        </table>
        
        <p style="font-family: Verdana; font-size: x-large; font-style: italic; color: #0094ff"> Employee of the Month Nomination Form</p>

        <!--<table id="frame" style="width: 40%; height: 600px; border-style: outset; border-color: #f1eded">
            <tr><td>-->
       
      
            <br>

        <form style="font-size: medium";font-family:verdana;color:red" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <table>
            <tr><td style=" color: #000">Date:
              </td><td>
                     <input style="font-size: smaller" placeholder="Select Date" type="text" id="datepicker" name="date" required>
                 </td></tr>
                        <tr><td style=" color: #000; width: 155px">Your Name:
              </td><td>
                     <input style="font-size: smaller; width: 150px" placeholder="Enter Name" type="text" name="eename" required>
                 </td></tr></table><br> 
                   <table style="color: #000">
                 
              <tr><td><h3 style="color: #0094ff; font-style: italic; font-family: Verdana">
  Nominee Info:
             </h3> </td></tr>
                 <tr><td style=" color: #000">
   Name of Nominee:
              </td><td>
                     <input style="font-size: smaller; width: 150px" placeholder="Enter Name" type="text" name="nominee" required>
                 </td></tr>
                 <!--<tr><td style=" color: #000">
   Select Department:
              </td><td>
                     <select style="font-size: smaller" name="dept">
                         <option value="Accounting">Accounting</option>
                         <option value="Billing">Billing</option>
                         <option value="Blending">Blending</option>
                         <option value="HR">HR</option>
                         <option value="IT">IT</option>
                         <option value="Sales">Sales</option>
                         <option value="Transportation">Transportation</option>
                     </select>
                 </td></tr>-->
                 <tr><td style=" color: #000">
   Select Location:
              </td><td>
                     <select style="font-size: smaller; width: 155px" name="local">
                         <option selected="selected" value="no location selected"></option>
                         <option value="Long Beach">Long Beach</option>
                         <option value="Rancho">Rancho</option>
                         <option value="Richmond">Richmond</option>
                         <option value="San Francisco">San Francisco</option>
                         <option value="Seattle">Seattle</option>
                         <option value="TI">Terminal Island</option>
                      </select>
                 </td></tr>
                 <tr><td style=" color: #000">    
   Select Month:
              </td><td>
                     <select style="font-size: smaller; width: 155px" name="month" required>
                         <option selected="selected" value="no month selected"></option>
                         <option value="January">January</option>
                         <option value="February">February</option>
                         <option value="March">March</option>
                         <option value="April">April</option>
                         <option value="May">May</option>
                         <option value="June">June</option>
                         <option value="July">July</option>
                         <option value="August">August</option>
                         <option value="September">September</option>
                         <option value="October">October</option>
                         <option value="November">November</option>
                         <option value="December">December</option>
                      </select>
                 </td></tr></table>
                
               <div id="textb">
                        <textarea  rows="10" cols="40" name="message" style="text-align: left" required></textarea><br>
                   </div><p>   
   Please describe the reaon for referring this nominee. Explain the major actions and results acheived by this person.
              </p><br><br>
        <input type="submit" name="submit1" value="Submit Nomination" style="height: 35px; width: 150px; background-color: #90d1f7; font-family: Verdana" 
            onclick="popfunction()">
        
        </form>

                <p id="usersignature"></p>
        <script>
function popfunction()
{
var x;

var person=prompt("Please type your name again. This will be treated as your signature","");

if (person!=null)
  {
  x="Thank you " + person + "! Your nomination has been submitted!";
  document.getElementById("usersignature").innerHTML=x;
  }
{
alert("Your Nomination has been submitted.");
}
}
</script>
  <?php 

  if (isset($_POST["submit1"]))
    {
    
    $email_from = 'nominee@pilotlogistics.com';

    $email_to = "rosie.gomez@pilotlogistics.com";
 
    $email_subject = "Employee of the Month Submission";


    $date = $_POST['date'];

    $eename = $_POST['eename']; // required
 
    $nominee = $_POST['nominee']; // required
 
    $location = $_POST['local']; // not required
 
    $month = $_POST['month']; // required

    $message = $_POST['message']; // required

    $email_message .= "Date: ".($date)."\n";
    $email_message .= "Submitted By: ".($eename)."\n";
    $email_message .= "Nominating: ".($nominee)."\n";
    $email_message .= "Located At: ".($location)."\n";
    $email_message .= "For Month: ".($month)."\n";
    $email_message .= "Reason: ".($message)."\n";




    $from = $email_from; // sender
    $subject = $email_subject;
    
    // send mail
    mail("rosie.gomez@pilotlogistics.com",$subject,$email_message,$from);
    echo "Thank you! Your nomination hash been sent";
    }
  
?>

    </body>
</html>
