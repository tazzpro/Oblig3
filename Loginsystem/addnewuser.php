<?php
	include ('dbconn.php');
	$newuser = $_POST['usernameinput'];
	$newpwd = $_POST['passwordinput'];
	$newemail = $_POST['emailinput'];
	
	
	$newpwd=md5($newpwd); //hash password before storing for security purposes
	$insert = mysqli_query($con, "INSERT INTO users (username, email, password) VALUES ('$newuser', '$newemail', '$newpwd')");
	
	
	if ($insert) {
		header("Location:index.php?status=reg_success");
	}
?>