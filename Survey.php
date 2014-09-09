<?php 
error_reporting(0);
//include("Includes/header.php");
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
  <!--<script>

      $(function () {

          $("#datepicker").datepicker();
         
      });

  </script>-->
        <link rel="stylesheet" href="styles/html5reset-1.6.1.css" type="text/css" media="screen,print">
	<link href="styles/demo.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="styles/jquery.novacancy.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#no').novacancy({
				'reblinkProbability': 0.1,
				'blinkMin': 0.2,
				'blinkMax': 0.6,
				'loopMin': 8,
				'loopMax': 10,
				'color': '#ffffff',
				'glow': ['0 0 80px #ffffff', '0 0 30px #008000', '0 0 6px #0000ff']
			}); 


			$('#vacancy').novacancy({
				'blink': 1,
				'off': 1,
				'color': 'Red',
				'glow': ['0 0 80px Red', '0 0 30px FireBrick', '0 0 6px DarkRed']
			});
		});
	</script>


      <script>
             $(function () {
            $('#logo2').hide().delay(4444).fadeIn(10).fadeOut(10).fadeIn(150).fadeOut(15).fadeIn(200).fadeOut(20).fadeIn(250).fadeOut(250).fadeIn(100);
        });
        </script>

    <script>
function changeImage() {
    var image = document.getElementById('logo2');
    if (image.src.match("bulbon")) {
        image.src = "images/logo-maxum-black.png";
    } else {
        image.src = "images/logo-maxum-black.png";
    }
}
</script>
  <link href="/Styles/Site.css" rel="stylesheet" type="text/css" />
    </head>
    <body style="background-color: #fff;
    color: #434343;
    font-size: .85em;
    font-family: Segoe UI, Verdana, Helvetica, Sans-Serif;
    height: 100%;">
         <!--<br></br>
        <h1 style="font-family: Verdana; color: #0094ff; font-style: italic">Maxum Website Launch Survey</h1> <hr><br>
        <div id="main" style="width: 100%; height: 580px; padding-right: 6%" class="jz"><ol class="round" style="width: 700px"><li class="asterisk">Please fill out the form completely and click the Submit button when finished.  Your submission will be sent directly to HR.
        Please do not submit this form more than one time per elligle period and not for more than one person.</li><li style="font-size: large; font-style: italic">To Qualify...</li><li style="text-shadow: 10px 10px 5px #808080">
             <img src="images/check2.png" alt="check"style="background-color: none; height: 5%; width: 5%"></img>The Employee must have completed 90 days of employment.</li><li style="text-shadow: 10px 10px 5px #808080; word-wrap: inherit">
             <img src="images/check2.png" alt="check"style="background-color: none; height: 5%; width: 5%"></img>Employee recognized should exemplify a positive work attitude and be in good standing.</li>
         <li style="text-shadow: 10px 10px 5px #808080">
             <img src="images/check2.png" alt="check"style="background-color: none; height: 5%; width: 5%"></img>Employee must not have received disciplinary warning within previous 12 month period.</li>
         <li style="text-shadow: 10px 10px 5px #808080">
             <img src="images/check2.png" alt="check"style="background-color: none; height: 5%; width: 5%"></img>Must not have any safety violations within 12 month period.</li></ol></div>-->
        <table style="width: 50%; border-style: outset; border-color: #f00; background-color: none; box-shadow: 10px 10px 10px 5px grey"><tr style="border-color: #fff; border: none"><td style="background-color: none">
             <!--<img src="images/pilot.png" style="margin-left: 5%; margin-right: 25%" alt="Pilot Logo"></td><td style="background-color: none">
           <img src="images/pride.png" style="width: 30%; height: 30%; margin-left: 15%; padding-left: 19% " alt="Pride"></td><td style="background-color: none">
            <img src="images/logo-maxum.png" style="margin-left: 30%; margin-right: 45%; padding-left: 8% " alt="Maxum Logo" id="logo2" onclick="changeImage()">-->
            <div class="board">
                <img src="images/logo-maxum-black.png" style="margin-left: 28%; margin-right: 55%; padding-left: -5% " alt="Maxum Logo" id="logo2" onload="changeImage()" >
                <p id="no">Let's turn Maxum</p><p id="vacancy">on-line</p></div>
        </td></tr>
        </table>
        <br><br>
        <p style="font-family: Verdana; font-size: xx-large; font-style: italic; color: #000">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <u>We need your input!</u></p>
        <br><br><br><br>
        <p style="font-family: Verdana; font-size: x-large; font-style: italic; color: #808080">Building Maxum's website requires expert advise and ideas... That's why we're asking our own employees for help!</p>
        <br><br>
        <p style="font-family: Verdana; font-size: large; font-style: italic; color: #808080">Please complete the following survey questions then click Submit when finished:</p>

        <!--<table id="frame" style="width: 40%; height: 600px; border-style: outset; border-color: #f1eded">
            <tr><td>-->
       
      
            <br><br><br>

        <form style="font-size: medium";font-family:verdana;color:red" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <table>
            <!--<tr><td style=" color: #000">Date:
              </td><td>
                     <input style="font-size: smaller" placeholder="Select Date" type="text" id="datepicker" name="date" required>
                 </td></tr>-->
                        <tr><td style=" color: #000; width: 155px">Your Name:
              </td><td>
                     <input style="font-size: smaller; width: 150px" placeholder="Enter Name" type="text" name="eename" required>
                 </td></tr></table><br> 
                   <!--<table style="color: #000">
                 
              <tr><td><h3 style="color: #0094ff; font-style: italic; font-family: Verdana">
  Survey:
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
                 </td></tr></table>-->
           
     <br><br>       <p>   
   1. &nbsp;In your opinion what would be at least two items that you would expect to see on our company website?
              These could be tools (like a fuel price index or a customer feedback survey),</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or they could be informational such as Maxum's history.
              </p><br>
              <ol id="textb"><li> <textarea  rows="2" cols="90" name="one-one" style="text-align: left" required></textarea><br>
                   </li><br>
           <li> <textarea  rows="2" cols="90" name="one-two" style="text-align: left" required></textarea><br>
                   </li><br>
           <li> <textarea  rows="2" cols="90" name="one-three" style="text-align: left"></textarea><br>
                   </li></ol>
        <br><br>    <p>   
   2. &nbsp;Please describe three things that you think are important to convey to customers or potential customers that might be visiting our site for the first time.
              </p><br>
              <ol id="textb"><li> <textarea  rows="2" cols="90" name="two-one" style="text-align: left" required></textarea><br>
                   </li><br>
           <li> <textarea  rows="2" cols="90" name="two-two" style="text-align: left" required></textarea><br>
                   </li><br>
           <li> <textarea  rows="2" cols="90" name="two-three" style="text-align: left" required></textarea><br>
                   </li></ol>
       <br><br>     <p>   
   3. &nbsp;What are three things that you feel you most proud of about Maxum?  These could be situations that were handled well, or the people you work with,</p><p>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; or maybe facts about Maxum that you're especially proud of.
              </p><br>
              <ol id="textb"><li> <textarea  rows="2" cols="90" name="three-one" style="text-align: left" required></textarea><br>
                   </li><br>
           <li> <textarea  rows="2" cols="90" name="three-two" style="text-align: left" required></textarea><br>
                   </li><br>
           <li> <textarea  rows="2" cols="90" name="three-three" style="text-align: left" required></textarea><br>
                   </li></ol>
             <br><br>     <p>   
   4. &nbsp;List at least 2 ways that having a company website might help you in your daily work life.
              </p><br>
              <ol id="textb"><li> <textarea  rows="2" cols="90" name="four-one" style="text-align: left" required></textarea><br>
                   </li><br>
           <li> <textarea  rows="2" cols="90" name="four-two" style="text-align: left" required></textarea><br>
                   </li><br>
           <li> <textarea  rows="2" cols="90" name="four-three" style="text-align: left"></textarea><br>
                   </li></ol>
             <br><br>     <p>   
   5. &nbsp;Picture you're at lunch with a Maxum customer... If they asked you to sum up Maxum in one word what would it be and why?
              </p><br>
              <p id="textb"><textarea  rows="10" cols="90" name="five" style="text-align: left" required></textarea></p><br>
       
     
                   
            <br><br>
        <input type="submit"  name="submit1" value="Submit Survey" style="height: 35px; width: 150px; background-color: #90d1f7; margin-left: 23%;  font-family: Verdana" onclick="popfunction()">
        

        </form>

        <p id="usersignature"></p>
       <script>
function popfunction()
{
alert("Thank you! Your survey has been submitted!");
}

</script>

  <?php 

  if (isset($_POST["submit1"]))
    {
    
    $email_from = 'survey@pilotlogistics.com';

    $email_to = "john.zendejas@pilotlogistics.com";
 
    $email_subject = "Survey Submission";


    

    $eename = $_POST['eename']; // required
    $one= $_POST['one-one']; // required
    $two = $_POST['one-two']; // required
    $three = $_POST['one-three']; // required
    $four = $_POST['two-one']; // required
    $five = $_POST['two-two']; // required
    $six = $_POST['two-three']; // required
    $seven = $_POST['three-one']; // required
    $eight = $_POST['three-two']; // required
    $nine = $_POST['three-three']; // required
    $ten = $_POST['four-one']; // required
    $eleven = $_POST['four-two']; // required
    $twelve = $_POST['four-three']; // required
    $thirteen = $_POST['five']; // required         

   
    $email_message .= "Submitted By: ".($eename)."\n";
    $email_message .= "Question One-One: ".($one)."\n";
    $email_message .= "Question One-Two: ".($two)."\n";
    $email_message .= "Question One-Three: ".($three)."\n";
    $email_message .= "Question Two-One: ".($four)."\n";
    $email_message .= "Question Two-Two: ".($five)."\n";
    $email_message .= "Question Two-Three: ".($six)."\n";
    $email_message .= "Question Three-One: ".($seven)."\n";
    $email_message .= "Question Three-Two: ".($eight)."\n";
    $email_message .= "Question Three-Three: ".($nine)."\n";
    $email_message .= "Question Four-One: ".($ten)."\n";
    $email_message .= "Question Four-Two: ".($eleven)."\n";
    $email_message .= "Question Four-Three: ".($twelve)."\n";
    $email_message .= "Question Five: ".($thirteen)."\n";




    $from = $email_from; // sender
    $subject = $email_subject;
    
    // send mail
    mail("john.zendejas@pilotlogistics.com",$subject,$email_message,$from);
    echo "Thank you! Your survey has been sent!";
    }
  
?>

    </body>
</html>
