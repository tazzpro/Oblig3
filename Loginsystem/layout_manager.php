<?php
	function loginform() {
		echo "<form action='validatelogin.php' method='POST'>
			<p>Username:</p>
			<input type='text' id='usernameinput' name='usernameinput' />
			<p>Password:</p>
			<input type='password' id='passwordinput' name='passwordinput' />
			
			<input type='submit' value='Login' id='loginbutton'/>
			
			<button type='button' id='registerbutton' onclick='location.href=\"register.html\";'>Register</button>
			</form>";
	}
	
	function logout() {
		echo ("<p><b>Welcome ".$_SESSION['username']."!\nLooking good today!</b></p>
			<form action='logout.php' method='GET'>
			<input type='submit' value='Logout' /> </form>");
	}
	
?>