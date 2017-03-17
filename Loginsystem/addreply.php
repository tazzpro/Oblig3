<?php
	session_start();
	
	include('dbconn.php');
	
	$comment = nl2br(addslashes($_POST['comment']));
	$cid = $_GET['cid'];
	$scid = $_GET['scid'];
	$tid = $_GET['tid'];
	$username = $_SESSION['username'];
	$now = date('Y-m-d');
	
	//Test:
	if(mysqli_connect_errno()) {
		echo "Failed to connect to MySql: ".mysqli_connect_error();
	}//feiler ikke i connect...
	
	$insert = mysqli_query($con, "INSERT INTO replies (category_id, subcat_id, topic_id, author, comment, date_posted)
								VALUES ('$cid', '$scid', '$tid', '$username', '$comment', '$now')");
		
		
		if ($insert) {
		header("Location: readtopic/".$cid."/".$scid."/".$tid."");
		}if(!$insert) {
			echo"Feilen".mysqli_error($con);
		}
?>