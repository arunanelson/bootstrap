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

function getSuggestions($str){
	$requestAddress = 'http://www.google.com/complete/search?hl=en&client=suggest&js=true&q='.urlencode($str);

	$xml_str = gethtml($requestAddress);
	$xml = json_encode(new SimplexmlElement($xml_str));
	$xml = json_decode($xml, true);
	$results = @$xml['CompleteSuggestion'];
	$result = array();

	if(@$results['suggestion']) {
		$result[0] = $results['suggestion']['@attributes']['data'];
	} else {
		for($i=0;$i<count($results);$i++){
			$result[] = $results[$i]['suggestion']['@attributes']['data'];
		}
	}

	return $result;
}

$q = @$_GET['q'];
$target = @$_GET['target'];
$results = getSuggestions($q);

if(!empty($results)) {
	echo "<ul>";
	for($i=0;$i<count($results);$i++){
		$url = @str_ireplace("%s", urlencode($results[$i]), $_GET['url']);
		echo "<li><a href='".$url."' target='".$target."'>".str_ireplace($q, $q."<b>", $results[$i])."</b></a></li>";
	}
	echo "</ul>";
}
?>