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
	<div class="header">
		<h1>Register, login and logout user php mysql</h1>
	</div>
	<h1>Home</h1>
	<div><h4>Welcome <?php echo $_SESSION['username'];	?></h4></div>
	
	<a href="register.php" alt="click to register">Registration</a>
	<a href="logout.php" alt="click to sign out">Logout!</a>

</body>
</html>