<?php
function gethtml($url){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, FALSE);
	curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

	return curl_exec($ch);
	curl_close($ch);
}

$q = @$_GET['q'];
$requestAddress = "http://ajax.googleapis.com/ajax/services/search/web?hl=en&v=1.0&key=ABQIAAAAT6lV7pDvZ3GvlMTTF6LUgBT2yXp_ZAY8_ufC3CFXhHIE1NvwkxQwM--ieg_0fQ_8s2kfKMcZRslt0g&q=".urlencode($q);
//$requestAddress = "http://localhost/demos/result.json";
$json_str = gethtml($requestAddress);
$json = json_decode($json_str, true);
$results = $json['responseData']['results'];
if(!$q){
	echo "Please begin typing your search query.";
}
elseif(!empty($results)) {
	echo "<ul>";
	for($i=0;$i<count($results);$i++){
		echo "<li><a href=\"".$results[$i]['url']."\">".$results[$i]['title']."</a><span>".$results[$i]['content']."</span><em>".$results[$i]['visibleUrl']."</em></li>";
	}
	echo "</ul><a href=\"http://google.com/search?q=".urlencode($q)."\" target=\"_blank\">Continue...</a>";
} else {
	echo "We did not find results for: <b>$q</b>.";
}
?>