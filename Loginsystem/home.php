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
                    <td><a href="forum.php">Forum</a></td>
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
        <br>
        <div class="content">
            <div><h4>Welcome <?php echo $_SESSION['username']; ?></h4></div>
            <h3>    This is a forum where you can discuss just about anything.
                <br>It is divided into sub-forums.
                <br>Some forums might not be safe for work, so take precautions.
                <br>GL HF.
            </h3>
        </div>
        <footer><p>Created by MegaForum &copy; Copyright! All rights reserved &reg; 16.03.2017 </p></footer>
    </main>
</body>
</html>