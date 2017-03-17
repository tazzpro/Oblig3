<?php
include ('layout_manager.php');
include ('content_function.php');
addview($_GET['cid'], $_GET['scid'], $_GET['tid']);
?>

<html>

    <head>
        <title> Hello </title>
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
        <div class="forumdesc">
            <?php
            if (!isset($_SESSION['username'])) {
                echo "<p> Please login first or <a href='register.html'>click here </a> to register.</p>";
            }
            ?>
        </div>

        <div class="content">
            <?php
            if (isset($_SESSION['username'])) {
                replytopost($_GET['cid'], $_GET['scid'], $_GET['tid']);
            }
            ?>


            <?php
            disptopic($_GET['cid'], $_GET['scid'], $_GET['tid']);
            ?>
        </div>

        <hr>
        <footer><p>Created by MegaForum &copy; Copyright! All rights reserved &reg; 17.03.2017 </p></footer>
    </body>


</html>