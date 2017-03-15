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
	<img src="start1.jpg" style="float: right; height: 15em; margin-right: 5%; margin-bottom: 0.5em;">
	<h1>Contact us</h1>
	<div><h4>Welcome <?php echo $_SESSION['username'];	?></h4></div>
	
	<a href="register.php" alt="click to register" id="register">Registration</a>
	<a href="logout.php" alt="click to sign out" id="logout">Logout</a>

</body>
</html>