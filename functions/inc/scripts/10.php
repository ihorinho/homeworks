<?php
function post($key){
	return isset($_POST[$key]) ? $_POST[$key] : null;
}
function cleanStr($str){
	return trim(strip_tags($str));
}

function getUniqueWords($text){
	//Розбиваємо строку в масив по-слівно 
	$arr = array_unique(preg_split("/\s/u", $text, -1, PREG_SPLIT_NO_EMPTY));
	echo count($arr)."<br>";
	print_r ($arr);
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$text = cleanStr(post("text"));
	getUniqueWords($text);
}

