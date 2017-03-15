<?php
	function loginform() {
		echo "<form action='validatelogin.php' method='POST'>
			<p>Username:</p>
			<input type='text' id='usernameinput' name='usernameinput' />
			<p>Emailadress:</p>
			<input type='email' id='emailinput' name='emailinput' />
			<p>Password:</p>
			<input type='password' id='passwordinput' name='passwordinput' />
			<input type='submit' value='Login'/>
			<button type='button' onclick='location.href=\"register.html\";'></button>
			</form>";
	}
?>