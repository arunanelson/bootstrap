<?php
include "db.php";

// Query
$q = @$_GET['q'];

// Limitation of suggestions
$limit = "10";

$results = array();
$sql = "SELECT *, MATCH (`title`) AGAINST ('" . mysql_real_escape_string($q) . "' IN BOOLEAN MODE) AS relevancy
	FROM `some_table`
	WHERE MATCH (`title`) AGAINST ('" . mysql_real_escape_string($q) . "' IN BOOLEAN MODE)
	ORDER BY relevancy
	LIMIT $limit";
$res = mysql_query($sql) or die (mysql_error());

if(!$q){
	echo "Please begin typing your search query.";
}
elseif(mysql_num_rows($res)) {
	echo "<ul>";
	while ($row = mysql_fetch_assoc ($res)) {
		echo "<li><a href=\"".$row['url']."\">".$row['title']."</a><span>".$row['content']."</span></li>";
	}
	echo "</ul>";
} else {
	echo "We did not find results for: <b>$q</b>.";
}
?>