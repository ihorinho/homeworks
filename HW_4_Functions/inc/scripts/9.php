<?php
function post($key){
	return isset($_POST[$key]) ? $_POST[$key] : null;
}

function reverseStr($string ) {
	$arr = array_reverse(preg_split('//u', $string, -1, PREG_SPLIT_NO_EMPTY));
	return implode("", $arr);
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$string = post('string');
	$result = reverseStr($string);
	echo $string."<br><hr>";
	echo $result;
}

