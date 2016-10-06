<?php
function post($key){
	return isset($_POST[$key]) ? $_POST[$key] : null;
}

function reverseSentences($text){
	$result = "";
	//Розбиваємо строку в масив по реченнях 
	$arr = explode(".", $text);
	//Видаляємо пусті елементи
	$arr = array_filter($arr, function($item){
		return !empty($item);
	});
	foreach ($arr as $string) {
		$string = trim($string);
		$string = mb_strtoupper(mb_substr($string, 0, 1)).mb_substr($string, 1);
		$result .= "{$string}. ";
	}
	return $result;

}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$text = post("text");
	echo $text."<hr>";
	echo reverseSentences($text);
}

