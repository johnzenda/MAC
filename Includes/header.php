<?php require_once ("Includes/session.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Maxum MAC</title>
        <link href="/Styles/Site.css" rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1"> 


    </head>
    <body>
        <div class="outer-wrapper">
        <header>
            <div class="content-wrapper">
                <div class="float-left">
                    <p class="site-title"><a href="/index.php">Maxum Accrual Checker & Corporate Calendar (M.A.C.C.)</a></p>
                </div>
                <div class="float-right">
                    <section id="login">
                        <ul id="login">
                        <?php
                        if (logged_on())
                        {
                            echo '<li><a href="/logoff.php">Sign out</a></li>' . "\n";
                            if (is_admin())
                            {
                                echo '<li><a href="/adduser.php">Add</a></li>' . "\n";
                                echo '<li><a href="/updateuserone.php">Edit</a></li>' . "\n";
                                //echo '<li><a href="/deletepage.php">Delete</a></li>' . "\n";
                            }
                        }
                        else
                        {
                            echo '<li><a href="/logon.php">Login</a></li>' . "\n";
                            echo '<li><a href="/register.php">Register</a></li>' . "\n";
                        }
                        ?>
                        </ul>
                        <?php if (logged_on()) {
                            echo "<div class=\"welcomeMessage\">Welcome, <strong>{$_SESSION['username']}</strong></div>\n";
                        } ?>
                    </section>
                </div>

                <div class="clear-fix"></div>
            </div>

                <section class="navigation" data-role="navbar">
                    <nav>
                        <ul id="menu">
                            <li><a href="/index.php">Home</a></li>
                            <li><a href="/calendar.php">Calendar</a></li>
                            <?php
                                $statement = $databaseConnection->prepare("SELECT id, menulabel FROM pages");
                                $statement->execute();

                                if($statement->error)
                                {
                                    die("Database query failed: " . $statement->error);
                                }

                                $statement->bind_result($id, $menulabel);
                                while($statement->fetch())
                                {
                                    echo "<li><a href=\"/page.php?pageid=$id\">$menulabel</a></li>\n";
                                }
                            ?>
                        </ul>
                    </nav>
            </section>
        </header>
