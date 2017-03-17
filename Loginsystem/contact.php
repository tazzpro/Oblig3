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
            <h1>We're never far away</h1> 

            <h3><strong><span8>Chat live with customer service</span></strong></h3>
            <p>We're open from 08:00-20:00 monday-friday<br>saturday and sunday from 10:00-16:00</p>

            <br><h3><strong>Call us</strong></h3>
            <p>We're open on: Monday-Friday, 08:00 - 20:00<br>
                Saturday and Sunday from: 10:00-16:00<br>
                You can call us on: 78 34 65 27</p>

            <h3><strong>Send an e-mail to MegaForum</strong></h3>
            <p>Send an email to:<br><a href="mailto:customerservice@megaforum.com">customerservice@megaforum.com</a></p>

            <br>

        </div>   
        <hr>
        <footer><p>Created by MegaForum &copy; Copyright! All rights reserved &reg; 17.03.2017 </p></footer>
    </body>
</html>