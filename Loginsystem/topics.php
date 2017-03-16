<?php
	include ('layout_manager.php');
	include ('content_function.php');
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
				logout();
			}else {
				if (isset($_GET['status']))
				{
					if($_GET['status'] == 'reg_success') {
						echo "<h1 style='color:green;'> new user registered successfully!</h1>";
					}else if($_GET['status'] == 'login_fail') {
						echo "<h1 style='color: red;'>Invalid username and/or password!</h1>";
					}				
				}
				loginform();
			}
		?>
		
	</div>
	<div class="content">
		<?php 
			
			disptopics($_GET['cid'],$_GET['scid']);
		?>
	</div>

	
</body>


</html>