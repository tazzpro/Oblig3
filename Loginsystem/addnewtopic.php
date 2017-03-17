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
								
	echo "Failed to do it";
	if ($insert) {
		header("Location: topics.php?cid=".$cid."&scid=".$scid."");
	}else{
		header("Location: index.php");
	}
	?>