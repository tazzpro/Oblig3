<?php
	include ('layout_manager.php');
	include ('content_function.php');
	addview($_GET['cid'], $_GET['scid'], $_GET['tid']);
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
					if($_GET['status'] == 'reg-success') {
						echo "<h1 style='color:green;'> new user registered successfully!</h1>";
					}else if($_GET['status'] == 'login-fail') {
						echo "<h1 style='color: red;'>Invalid username and/or password!</h1>";
					}				
				}
				loginform();
			}
		?>
		
	</div>
	<div class="forumdesc">
		<?php
			if(!isset($_SESSION['username'])) {
				echo "<p> Please login first or <a href='register'>click here </a> to register.</p>";
			}
		?>
	</div>
	
	<?php
		if(isset($_SESSION['username'])) {
			replytopost($_GET['cid'], $_GET['scid'], $_GET['tid']);
		}
	?>
	
	<div class="content">
	<?php
		disptopic($_GET['cid'], $_GET['scid'], $_GET['tid']);
		
	?>
	</div>

	
</body>


</html>