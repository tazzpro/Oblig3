
<html>

<head>
<title> Hello </title>
</head>
<body>
<a href="login.php" alt="Click to log in!">Login</a><br>
<a href="register.php" alt="Click to log in!">or Register</a>

	<div>
		<?php
			if (isset($_SESSION['username'])) 
			{
				//logout function
			}else {
				if (isset($_GET['status']))
				{
					if($_GET['status'] == 'reg_success') {
						echo "<h1 style='color:green'> new user registered successfully!</h1>"
					}
				}
			}
		?>
	</div>

	 if($query->num_rows !==0):
	while($row = $query->fetch()):
	?>
	
	
</body>


</html>