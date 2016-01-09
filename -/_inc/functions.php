<?php

/*function segmentURL($url){    
    $segments = explode("/", $url);    
}
segmentURL($_SERVER['REQUEST_URI']);*/

function parseFeed($file, $num){

	$str = file_get_contents($file);
	$json = json_decode($str, true);

	echo $json[1]['title'];

}

?>