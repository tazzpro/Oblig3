<?php
include ('layout_manager.php');
include ('content_function.php');
?>

<html>

<<<<<<< HEAD
<head>
<title> Hello </title>
</head>
<body>

=======
    <head>
        <title> Hello </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <img src="Header.png">
        </div>
        <div>
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
>>>>>>> origin/master

        </div>
        <br>
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
        <div class="content">
            <?php
            dispcategories();
            ?>
        </div>


    </body>


</html>