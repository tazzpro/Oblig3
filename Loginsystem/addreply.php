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
		replyplus($cid, $scid, $tid);
		header("Location: readtopic.php?cid=".$cid."&scid=".$scid."&tid=".$tid."");
		}if(!$insert) {
			echo"Feilen".mysqli_error($con);
		}
		function replyplus($cid, $scid, $tid) {
		include ('dbconn.php');
		$update = mysqli_query($con, "UPDATE topics SET replies = replies +1 WHERE category_id = ".$cid." AND
									subcat_id = ".$scid." AND topic_id = ".$tid."");
	}
?>