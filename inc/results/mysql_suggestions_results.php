<?php
include "db.php";

// Query
$q = @$_GET['q'];
$ql = strlen($q);

// Target mode
$target = @$_GET['target'];

// Limitation of suggestions
$limit = "10";

$results = array();
$sql = "SELECT *
	FROM `products`
	WHERE LEFT(name, $ql)='$q'
	ORDER BY `name`
	LIMIT $limit";
$res = mysql_query($sql) or die (mysql_error());
while ($row = mysql_fetch_assoc ($res)) {
	$results[] = $row["name"];
	$ids[] = $row["line_id"];
	$pics[] = $row["pic"];
}

if(!empty($results)) {
	echo "<ul>";
	for($i=0;$i<count($results);$i++){
		$url = @str_ireplace("%s", ($ids[$i]."#/".$results[$i]."/0/"), $_GET['url']);
		echo "<li><img src='http://www.bormioliroccousa.com/img/catalog/".strtolower($pics[$i]).".png'/><a href='".$url."' target='".$target."'>".str_ireplace($q, $q."<b>", $results[$i])."</b></a></li>";
	}
	echo "</ul>";
}
?>