<?php
require($_SERVER['DOCUMENT_ROOT']."/backend/db.php");
function getUrlQuery($url, $key = null)
{
	$parts = parse_url($url); 
	if (!empty($parts['query'])) {
		parse_str($parts['query'], $query); 
		if (is_null($key)) {
			return $query;
		} elseif (isset($query[$key])) {
			return $query[$key];
		}        
	}
 
	return false;
}

function countDB($value)
{
	$num_rows = mysqli_num_rows($value);
	return $num_rows;
}