<!DOCTYPE html>
<html>
    <head>
        <title> Register </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <body class="background">
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
        <div class="">
            <h1>We're never far away</h1> 
            <h3><strong><span>Chat live with customer service</span></strong></h3>
            <p>We're open from 08:00-20:00 monday-friday<br>saturday and sunday from 10:00-16:00</p>

            <h3><strong>Call us</strong></h3>
            <p>We're open monday-friday 08:00 - 20:00<br>
                saturday and sunday from 10:00-16:00<br>
                78 34 65 27</p>

            <h3><strong>Send an e-mail</strong></h3>
            <p>Send an email to:<br><a href="mailto:customerservice@megaforum.com">customerservice@megaforum.com</a></p>
        </div>
        <img src="start1.jpg" style="float: right; height: 15em; margin-right: 5%; margin-bottom: 0.5em;">
        <h1>Contact us</h1>
        <div><h4>Welcome <?php echo $_SESSION['username']; ?></h4></div>

        <a href="register.php" alt="click to register" id="register">Registration</a>
        <a href="logout.php" alt="click to sign out" id="logout">Logout</a>

    </body>
</html>