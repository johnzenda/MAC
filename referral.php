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
         <div id="main" style="width: 100%; height: 580px; padding-right: 8%" class="jz"><ol class="round" style="width: 720px"><li class="asterisk">
             A referral form must be sumbitted to the Terminal Manager within 15 days of the start date of any referral
        in order to be paid.  The Terminal Manager will forward this signed form to their Recruiter to contact and see if the referral is qualified to be hired. If the referral is qualified the Recruiter will
        process the hire. If the person is not qualified the Recruiter will let both the referring associate and the applicant know.
       </li><li style="font-size: large; font-style: italic">To Qualify...</li><li style="text-shadow: 10px 10px 5px #808080">
             <img src="images/check2.png" alt="check"style="background-color: none; height: 5%; width: 5%"></img>Positions available for the referral will be posted in the terminal so everyone knows what jobs are open.</li><li style="text-shadow: 10px 10px 5px #808080; word-wrap: inherit">
             <img src="images/check2.png" alt="check"style="background-color: none; height: 5%; width: 5%"></img>The Referral Form must be completed to be paid, within 15 days of hire date.</li>
         <li style="text-shadow: 10px 10px 5px #808080">
             <img src="images/check2.png" alt="check"style="background-color: none; height: 5%; width: 5%"></img>The award for a successful hire that stays 60 days from date of hire will be $250.</li>
         <li style="text-shadow: 10px 10px 5px #808080">
             <img src="images/check2.png" alt="check"style="background-color: none; height: 5%; width: 5%"></img>A referral is someone you know, have worked with, or is being recommended to your terminal as an asset.</li></ol></div>
        <table style="width: 50%; border-style: outset; border-color: #f00; background-color: none; box-shadow: 10px 10px 10px 5px grey"><tr style="border-color: #fff; border: none"><td style="background-color: none">
            <img src="images/pilot.png" style="margin-left: 5%; margin-right: 25%" alt="Pilot Logo"></td><td style="background-color: none">
            <!--<img src="images/pride.png" style="width: 30%; height: 30%; margin-left: 15%; padding-left: 19% " alt="Pride"></td><td style="background-color: none">-->
            <img src="images/logo-maxum.png" style="margin-left: 5%; margin-right: 45%; padding-left: 8% " alt="Maxum Logo">
        </td></tr>
        </table>
        
        <p style="font-family: Verdana; font-size: x-large; font-style: italic; color: #0094ff"> Maxum Employee Referral Submission Form</p>

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
                 </td></tr>
             <tr><td style=" color: #000">Employee Number:
              </td><td>
                     <input style="font-size: smaller" placeholder="Enter Number" type="text" id="eenumber" name="eenumber" required>
                 </td></tr>
            </table><br> 
                   <table style="color: #000">
                 
              <tr><td><h3 style="color: #0094ff; font-style: italic; font-family: Verdana">
  Referral Info:
             </h3> </td></tr>
                 <tr><td style=" color: #000">
   Name of Referral:
              </td><td>
                     <input style="font-size: smaller" placeholder="Enter Name" type="text" name="refname" required>
                 </td></tr>
                        <tr><td style=" color: #000">Phone #:
              </td><td>
                     <input style="font-size: smaller" placeholder="Enter Phone Number" type="text" id="refphone" name="refphone" required>
                 </td></tr>
                        <tr><td style=" color: #000">Email:
              </td><td>
                     <input style="font-size: smaller" placeholder="Enter Email" type="email" placeholder="me@domain.com" id="refemail" name="refemail" required>
                 </td></tr>
                        <tr><td style=" color: #000">For Position:
              </td><td>
                     <input style="font-size: smaller" placeholder="Enter Position" type="text" id="refposition" name="refposition" required>
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
                 </td></tr>
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
                 </td></tr>-->
                   </table>
                
               <p style="color: #000">   
   Please describe the reaon for referring this person and how you know them:
              </p><div id="textb">
                        <textarea  rows="10" cols="40" name="message" style="text-align: left" required></textarea><br>
                   </div><br><br>
        <input type="submit" name="submit1" value="Submit Referral" style="height: 35px; width: 150px; background-color: #90d1f7; font-family: Verdana" onclick="popfunction()">
        

        </form>

        <p id="usersignature"></p>
       <!-- <script>
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
</script>-->

  <?php 

  if (isset($_POST["submit1"]))
    {
    
    $email_from = 'referral@pilotlogistics.com';

    $email_to = "john.zendejas@pilotlogistics.com";
 
    $email_subject = "Employee Referral Submission";


    $date = $_POST['date'];

    $eename = $_POST['eename']; // required

    $eenumber = $_POST['eenumber']; // required
 
    $refname = $_POST['refname']; // required
 
    $refphone = $_POST['refphone']; // not required
 
    $refemail = $_POST['refemail']; // required

    $refposition = $_POST['refposition']; // required

    $message = $_POST['message']; // required

    $email_message .= "Date: ".($date)."\n";
    $email_message .= "Submitted By: ".($eename)."\n";
    $email_message .= "Employee Number: ".($eenumber)."\n";
    $email_message .= "Referring: ".($refname)."\n";
    $email_message .= "Phone: ".($refphone)."\n";
    $email_message .= "Email: ".($refemail)."\n";
    $email_message .= "For Position: ".($refposition)."\n";
    $email_message .= "Reason: ".($message)."\n";




    $from = $email_from; // sender
    $subject = $email_subject;
    
    // send mail
    mail("john.zendejas@pilotlogistics.com",$subject,$email_message,$from);
    echo "Thank you! Your submission has been sent";
    }
  
?>

    </body>
</html>
