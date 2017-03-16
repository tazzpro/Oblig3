<?php
	session_start();
	
	include('dbconn.php');
	
	$topic = addslashes($_POST['topic']);
	$content = nl2br(addslashes($_POST['content']));
	$cid = $_GET['cid'];
	$scid = $_GET['scid'];
	
	//echo "topic:".$topic."<br>content:".$content."<br>cid:".$cid."<br>scid:".$scid"";
	
	$insert = mysqli_query($con, "INSERT INTO topics (category_id, subcat_id, author, title, content, date_posted)
								VALUES ('$cid', '$scid', '$_SESSION['username']', '$topic', '$content', 2017-03-15);");
								
	*/if ($insert) {
		header("Location: topics.php?cid=".$cid."&scid=".$scid."");
	}else{
		header("Location: index.php");
	}
?>