<?php
function post($key){
	return isset($_POST[$key]) ? $_POST[$key] : null;
}

function reverseSentences($text){
	$result = "";
	//Розбиваємо строку в масив по реченнях 
	$arr = array_reverse(explode(".", $text));
	array_shift($arr);
	foreach ($arr as $string) {
		trim($string);
		$result .= "{$string}. ";
	}
	return $result;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$text = post("text");
	echo $text."<hr>";
	echo reverseSentences($text);
}

