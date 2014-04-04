<?php 
    require_once ("Includes/simplecms-config.php"); 
    require_once  ("Includes/connectDB.php");
    include("Includes/header.php"); 
?>
<div id="MTVMTeNIBWADiv" class="MTVMTeNIBWAwrapper"><ul class="MTVMTeNIBWAtop"><li class="MTVMTeNIBWAserv1"><div></div></li><li class="MTVMTeNIBWAitem2"><a href="#">Location</a></li><li class="MTVMTeNIBWAitem2"><a href="#">Support</a></li><li class="MTVMTeNIBWAitem4"><a href="#">Help</a></li><li class="MTVMTeNIBWAserv5"><div></div></li></ul><script type="text/javascript" src="cssmenutools/scripts/MTVM.js">/* MTVMMenu script ID:MTVMTeNIBWA */</script></div>
<div id="main">
    <?php
        $pageid = $_GET['pageid'];
        $query = 'SELECT menulabel, content FROM pages WHERE id = ? LIMIT 1';
        $statement = $databaseConnection->prepare($query);
        $statement->bind_param('s', $pageid);
        $statement->execute();
        $statement->store_result();
        if ($statement->error)
        {
            die('Database query failed: ' . $statement->error);
        }

        if ($statement->num_rows == 1)
        {
            $statement->bind_result($menulabel, $content);
            $statement->fetch();
            echo "<h2>$menulabel</h2> $content";
        }
        else
        {
            echo 'Page Not Found';
        }
    ?>
</div>
</div> <!-- End of outer-wrapper which opens in header.php -->
<?php 
    include ("Includes/footer.php");
 ?>