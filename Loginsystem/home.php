<?php	session_start();
$db=mysqli_connect("localhost","root","Asdasd123","authentication");
?>

<!DOCTYPE html>
<html>
<head>
	<title> Register </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<body class="background">
	<div class="header">
		<h1>Welcome to Mega Forum</h1>
	</div>
	
		<header>
			<nav>
				<tr>
				<td><a href="#">Home</a></td>
				<td><a href="#">Forum</a></td>
				<td><a href="#">About Us</a></td>
				<td><a href="#">Contact Us</a></td>
				</tr>
			</nav>
	</header>
	<img src="start1.jpg" style="float: right; height: 15em; margin-right: 5%; margin-bottom: 0.5em;">
	
	<div><h4>Welcome <?php echo $_SESSION['username'];	?></h4></div>
	
	<a href="register.php" alt="click to register">Registration</a>
	<a href="logout.php" alt="click to sign out">Logout!</a>

</body>
</html>