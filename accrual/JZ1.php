<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <p>
       <form action="demo_form.asp" id="carform">
   Last Name:<input type="text" name="lname">
   <input type="submit" name="Search">
 </form>
<br>
            <?php
                $selectOption = $_POST['taskOption'];
            ?>
 <select name="taskOption" form="carform">
   <option value="RanchoDominguez" selected="selected">Rancho Domiguez</option>
   <option value="ti">Terminal Island</option>
   <option value="lb">Long Beach</option>
   <option value="Richmond">Richmond</option>
   <option value="sf">San Francisco</option>
   <option value="Seattle">Seattle</option>
 </select> 
        </p>
        <?php
            echo "This is test text!"
        ?>
    </body>
</html>
