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
		echo "<td class='num-topics'>".getnumtopics($parent_id, $row['subcat_id'])."</td></tr>";
		}
	}
	
	function getnumtopics($cat_id, $subcat_id) {
		
		include ('dbconn.php');
		$select = mysqli_query($con, "SELECT cat_id, subcat_id FROM topics WHERE ".$cat_id." = cat_id AND ".$subcat_id." = subcat_id");
		return mysqli_num_rows($select);
	}
	function disptopics($cid, $scid) {
		include ('dbconn.php');
		
		$select = mysqli_query($con, "SELECT topic_id, author, title, date_posted, views FROM category, subcategory, topics
										WHERE ($cid = topics.category_id) AND ($scid = topics.subcategory_id) AND ($cid = categories.cat_id)
										AND ($scid = subcategories.subcat_id) ORDER BY topic_id DESC");
		if(mysqli_num_rows($select) != 0) {
			echo "<table class='topic-table'>";
			echo "<tr><tb>Title</tb><tb>Posted by</tb><tb>Date Posted</tb><tb>Views</tb><tb>Replies</tb></tr>";
			while($row = mysqli_fetch_assoc($select)) {
				echo "<tr><td><a href='readtopic.php=?cid=".$cid."&scid=".$scid."&tid=".$row['topic_id']."'>
			}
		}
	}
?>