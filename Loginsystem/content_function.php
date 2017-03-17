<?php
	function dispcategories() {
		include ('dbconn.php');
		
		$select = mysqli_query($con, "SELECT * FROM categories");
		while ($row = mysqli_fetch_assoc($select))	{
			echo "<table class='category-table'>";
			echo "<tr><td class='main-category' colspan='2'>".$row['category_title']."</td></tr>";
			dispsubcategories($row['cat_id']);
			echo "</table>";
		}
	}
	
	function dispsubcategories($parent_id){
		include ('dbconn.php');
		$select = mysqli_query($con, 	"SELECT cat_id, subcat_id, subcat_title, subcat_desc FROM categories, subcategory
										WHERE ($parent_id = categories.cat_id) AND ($parent_id = subcategory.parent_id)");
		echo "<tr><td width='90%'>Categories</td></td width='10%'>Topics</td></tr>";
		while ($row = mysqli_fetch_assoc($select)) {
			echo "<tr><td class='category_title'><a href='topics.php?cid=".$row['cat_id']."&scid=".$row['subcat_id']."'>
				".$row['subcat_title']."<br />";
		echo $row['subcat_desc']."</a></td>";
		echo "<td class='num-topics'>";
		getnumtopics($parent_id, $row['subcat_id']);
		echo "</td></tr>";
		}
	}
	
	function getnumtopics($cat_id, $subcat_id) {
		
		include ('dbconn.php');
		$select = mysqli_query($con, "SELECT cat_id, subcat_id FROM topics WHERE ".$cat_id." = cat_id AND ".$subcat_id." = subcat_id");
		return mysqli_num_rows($select);
	}
	
	function disptopics($cid, $scid) {
		include ('dbconn.php');
		
		$select = mysqli_query($con, "SELECT topic_id, author, title, date_posted, views, replies FROM categories, subcategory, topics
										WHERE ($cid = topics.category_id) AND ($scid = topics.subcat_id) AND ($cid = categories.cat_id)
										AND ($scid = subcategory.subcat_id) ORDER BY topic_id DESC");
		if(mysqli_num_rows($select) != 0) {
			echo "<table class='topic-table'>";
			echo "<tr><th>Title</th><th>Posted by</th><th>Date Posted</th><th>Views</th><th>Replies</th></tr>";
			while($row = mysqli_fetch_assoc($select)) {
				echo "<tr><td><a href='readtopic.php?cid=".$cid."&scid=".$scid."&tid=".$row['topic_id']."'>
					".$row['title']."</a></td><td>".$row['author']."</td><td>".$row['date_posted']."</td><td>".$row['views']."</td>
					<td>".$row['replies']."</td></tr>";
			}
			echo "</table>";
		}else {
			echo "<p> this category has no topics as of yet! <a href='newtopic.php?cid=".$cid."&scid=".$scid."'> Click to add new topic!</a></p>";
		}
	}
	
	function disptopic($cid, $scid, $tid) {
		include ('dbconn.php');

		$select = mysqli_query($con, "SELECT  category_id, subcat_id, topic_id, author, title, content, date_posted FROM
									topics WHERE($cid = category_id) AND ($scid = subcat_id) AND ($tid = topic_id)");
		
		$row = mysqli_fetch_assoc($select);
		echo nl2br ("<div><h2 class='title'>".$row['title']."</h2><p class ='post-author'>".$row['author']."\n".$row['date_posted']."</p></div>");
		echo "<div><p class ='post-content'>".$row['content']."</p></div>";
	}
	
	function addview($cid, $scid, $tid) {
		include ('dbconn.php');
		$update = mysqli_query($con, "UPDATE topics SET views = views + 1 WHERE category_id = ".$cid." AND
									subcat_id = ".$scid." AND topic_id = ".$tid."");
	}
	
	
	
	function replylink($cid, $scid, $tid) {
	
		echo"<form action='replyto.php?cid=".$cid."&scid=".$scid."&tid=".$tid."'
		method='POST'>
		<input type='submit' value='Reply to this post' /></form>";
	}
	
	function replytopost($cid, $scid, $tid) {
		echo "<div><form action='addreply.php?cid=".$cid."&scid=".$scid."&tid=".$tid."' method='POST'>
		<p>Comment: </p>
		<textarea cols='80' rows='5' id='comment' name='comment'></textarea><br />
		<input type='submit' value='add comment' />
		</form></div>";
	}
	
	function dispreplies($cid, $scid, $tid) {
		include ('dbconn.php');
		
		
		$select = mysqli_query($con, "SELECT author, comment, date_posted FROM  replies WHERE ($cid = category_id) AND ($scid = subcat_id) AND ($tid = topic_id)
										ORDER BY reply_id DESC");
										
		if(mysqli_num_rows($select) != 0) {
			echo"<div><table class = 'reply-table'>";
			
			while ($row = mysqli_fetch_assoc($select)) {
				echo nl2br ("<tr><th width='15%'>".$row['author']."</th><td>".$row['date_posted']."\n".$row['comment']."\n\n</td></tr>");
			}
			echo "</table></div>";
			}
	}
	
	function countReplies($cid, $scid, $tid) {
		include ('dbconn.php');
		$select = mysqli_query($con, "SELECT category_id, subcat_id, topic_id FROM replies WHERE ($cid = category_id) AND ($scid = subcat_id) AND ($tid = topic_id)");
		echo mysqli_num_rows($select);
	}
	
	?>