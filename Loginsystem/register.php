<?php
session_start();
//connect to database
if(isset($_POST['register_btn']))
{
	$db=mysqli_connect("localhost","root","Asdasd123","authentication");
    $username =	mysqli_real_escape_string($db, $_POST['username']);
    $email =	mysqli_real_escape_string($db, $_POST['email']);
	$password =	mysqli_real_escape_string($db, $_POST['password']);
    $password2 =mysqli_real_escape_string($db, $_POST['password2']);  
     if($password==$password2)
     {           //Create User
			// todo: use password_hash
            $password=md5($password); //hash password before storing for security purposes
            $sql="INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
            mysqli_query($db,$sql);  
            $_SESSION['message']="You are now logged in"; 
            $_SESSION['username']=$username;
            header("location:home.php");  //redirect home page
			
    }
    else
    {
      $_SESSION['message']="The two password do not match";   
    }
	 
	
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>PlacementHeader, to be changed!</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="header">
   <img src="Header.png">
</div>
<?php 
	if (isset($_SESSION['message']))
    {
         echo '<div id="error_msg">' . $_SESSION['message'] . '</div>';
         unset($_SESSION['message']);
    }
?>
<form method="post" action="register.php">
  <table>
     <tr>
           <td>Username : </td>
           <td><input type="text" name="username" class="textInput"></td>
     </tr>
     <tr>
           <td>Email : </td>
           <td><input type="email" name="email" class="textInput"></td>
     </tr>
      <tr>
           <td>Password : </td>
           <td><input type="password" name="password" class="textInput"></td>
     </tr>
      <tr>
           <td>Password again: </td>
           <td><input type="password" name="password2" class="textInput"></td>
     </tr>
      <tr>
           <td></td>
           <td><input type="submit" name="register_btn" class="Register"></td>
     </tr>
  
</table>
</form>
</body>
</html>
