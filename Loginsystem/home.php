<?php
session_start();
$db = mysqli_connect("localhost", "root", "Asdasd123", "authentication");
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
        <aside class="right">
            <a href="register.php" alt="click to register" id="register">Registration</a>
            <a href="logout.php" alt="click to sign out" id="logout">Logout</a>
            <img src="start1.jpg" id ="rightpic">
        </aside>
                <aside class="left">Recent activity:
            <br>Most recent post edited
            <br>2nd most recent post edited
            <br>3rd etc..
        </aside>
        <h1>Home</h1>
        <div class="content">
            <div><h4>Welcome <?php echo $_SESSION['username'];	?></h4></div>
            <h3>    This is a forum where you can discuss just about anything.
                <br>It is divided into sub-forums.
                <br>Some forums might not be safe for work, so take precautions.
                <br>GL HF.
            </h3>
        </div>
        <footer><p>Created by MegaForum © Copyright! All rights reserved ® 13.03.2017 </p></footer>
        
        
                <aside class="right">
            <a href="register.php" alt="click to register" id="register">Registration</a>
            <a href="logout.php" alt="click to sign out" id="logout">Logout</a>
            <img src="start1.jpg" id ="rightpic">
        </aside>
                <aside class="left">Recent activity:
            <br>Most recent post edited
            <br>2nd most recent post edited
            <br>3rd etc..
        </aside>
        <h1>Home</h1>
        <div class="content">
            <div><h4>Welcome <?php echo $_SESSION['username'];	?></h4></div>
            <h3>    This is a forum where you can discuss just about anything.
                <br>It is divided into sub-forums.
                <br>Some forums might not be safe for work, so take precautions.
                <br>GL HF.
            </h3>
        </div>
        <footer><p>Created by MegaForum © Copyright! All rights reserved ® 13.03.2017 </p></footer>

    </body>
</html>