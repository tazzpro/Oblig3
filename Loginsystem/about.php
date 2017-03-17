<?php
include ('layout_manager.php');
include ('content_function.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Register </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <img src="Header.png">
        </div>
        <br>
        <header>
            <nav>
                <tr>
                    <td><a href="home.php">Home</a></td>
                    <td><a href="index.php">Forum</a></td>
                    <td><a href="about.php">About Us</a></td>
                    <td><a href="contact.php">Contact Us</a></td>
                </tr>
            </nav>
        </header>
        <br>
        <div class="right">
            <?php
            session_start();
            if (isset($_SESSION['username'])) {
                logout();
            } else {
                if (isset($_GET['status'])) {
                    if ($_GET['status'] == 'reg_success') {
                        echo "<h1 style='color:green;'> new user registered successfully!</h1>";
                    } else if ($_GET['status'] == 'login_fail') {
                        echo "<h1 style='color: red;'>Invalid username and/or password!</h1>";
                    }
                }
                loginform();
            }
            ?>

            <img src="start1.jpg" id ="rightpic">
        </div>
        <aside class="left">Recent activity:
            <br>Most recent post edited
            <br>2nd most recent post edited
            <br>3rd etc..
        </aside>

        <div class="content">
            <h1>About us</h1> 

            <h3><strong><span8>The developers...</span></h3>
                        <p>We're a group of 6 students</p>
                        <p>that chosen this as a group project.</p>

                        <br><p>The developers behind this forum are:</p>
                        <p>Rasmus D, Espen V, Eivind M,</p>
                        <p>Bjørn-Magnus S, Knut Johan S and Even M
                        </p></strong>

        </div>
        
        <footer><p>Created by MegaForum &copy; Copyright! All rights reserved &reg; 17.03.2017 </p></footer>
    </body>
</html>