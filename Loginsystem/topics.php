<?php
	include ('layout_manager.php');
	include ('content_function.php');
?>

<html>

<head>
<title> Hello </title>
</head>
<body>

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
	<?php
		if(isset($_SESSION['username'])) {
			echo"<div class='content'><p><a href='newtopic/".$_GET['cid']."/".$_GET['scid']."'>
				Add new topic</a></p></div>";
		}
	?>
	<div class="content">
		<?php 
			
			disptopics($_GET['cid'],$_GET['scid']);
		?>
	</div>

	
</body>


</html>