<?php
	include ('layout_manager.php');
?>
<html>

<head>
<title> Hello </title>
</head>
<body>
<a href="login.php" alt="Click to log in!">Login</a><br>
<a href="register.php" alt="Click to log in!">or Register</a>

	<div>
		<?php
			session_start();
			if (isset($_SESSION['username'])) {
				//logout function
			}else {
				if (isset($_GET['status']))
				{
					if($_GET['status'] == 'reg_success') {
						echo "<h1 style='color:green;'> new user registered successfully!</h1>";
					}else if($_GET['status'] == 'login_fail') {
						echo "<h1 style='color: red;>invalid username and/or password!</h1>";
					}else{
						echo 'invalid status: ' . $_GET['status'];
					}
				
				}
			}
		?>
		
	</div>

	
</body>


</html>