<?php
function post($key){
	return isset($_POST[$key]) ? $_POST[$key] : null;
}

function getCommonWords($a, $b) {
	//Розбиваємо строку в масив по-слівно 
	$arr_a = preg_split("/[\s,.:;]+/", $a);
	$arr_b = preg_split("/[\s,.:;]+/", $b);
	$result = array_unique(array_intersect($arr_a, $arr_b));
	//видаляємо пусті елементи
	return array_filter($result,  function($item) {
		return !empty($item);
	});
	
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$text1 = post("text1");
	$text2 = post("text2");	
	echo "<pre>";
	print_r(getCommonWords($text1, $text2));
	echo "</pre>";
}

