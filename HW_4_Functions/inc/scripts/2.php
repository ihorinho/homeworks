<?php
function post($key){
	return isset($_POST[$key]) ? $_POST[$key] : null;
}

function get3Longest($text){
	//Розбиваємо строку в масив по-слівно 
	$arr = array_unique(preg_split("/[\s,.:;]+/", $text));
	// сортуємо масив по спаданні залежно від довжини слова
	usort($arr, function ($a, $b) {
		return strlen($a) > strlen($b) ? -1 : 1;
	});
	//виводимо результат
	for($i = 0; $i < 3; $i++){
		echo $i == 2 ? $arr[$i] : $arr[$i].", ";
	}	
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$text = post("text");
	get3Longest($text);
}

