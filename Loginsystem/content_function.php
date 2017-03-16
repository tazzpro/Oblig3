<?php
	function dispcategories() {
		include ('dbconn.php');
		
		$select = mysql_query($con, "SELECT * FROM categories");
		
		while ($row = mysqli_fetch_assoc($select))	{
			echo "<table class='category-table'>";
			echo "<tr><td class='main-category' colspan='2'>".$row['category_title']."</td></tr>";
			dispsubcategories($row['cat_id']);
			echo "</table";
		}
	}
	
	function dispsubcategories($parent_id){
		include ('dbconn.php');
		$select = mysqli_query($con, 	"SELECT cat_id, subcat_id, subcat_title, subcat_desc FROM categories, subcategory
										WHERE ($parent_id = categories.cat_id) AND ($parent_id = subcategory.parent_id)");
		echo "<tr><td width='90%'>Categories</td></td width='10%'>Topics</td></tr>";
	}
?>