<?php
	session_start();
	
	include('dbconn.php');
	
	$topic = addslashes($_POST['topic']);
	$content = nl2br(addslashes($_POST['content']));
	$cid = $_GET['cid'];
	$scid = $_GET['scid'];
	$username = $_SESSION['username'];
	$now = date('Y-m-d');
	
	$insert = mysqli_query($con, "INSERT INTO topics (category_id, subcat_id, author, title, content, date_posted)
								VALUES ('$cid', '$scid', '$username', '$topic', '$content', '$now')");
								
	if ($insert) {
		header("Location: topics/".$cid."/".$scid."");
	}
	?>