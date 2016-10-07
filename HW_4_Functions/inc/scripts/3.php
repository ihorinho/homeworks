<?php
function post($key){
	return isset($_POST[$key]) ? $_POST[$key] : null;
}

function deleteWords($file_name, $lengthMax = 1 ) {
	$GLOBALS['lengthMax'] = $lengthMax;
	//Перевіряємо коректність введениї даних
	if (!file_exists($file_name) || !is_numeric($lengthMax)){
		die('Incorrect input values');
	}
	$arr_file = file($file_name);
	// Очищаємо файл
	file_put_contents($file_name, '');
	foreach($arr_file as $key => $row){
		//Розбиваємо строку в масив по-слівно 
		$arr_row = preg_split("/[\s,.:;]+/u", $row, -1, PREG_SPLIT_NO_EMPTY);
		//Видаляємо слова, які не відповідають обмеженню
		$result_arr_row = array_filter($arr_row, function($word) {
			return mb_strlen($word) <= $GLOBALS['lengthMax']; 
		});
		//якщо весь рядок видалений, то не записуємо його  у файл
		if(empty($result_arr_row)) continue;
		//Склеюємо слова у рядок і записуємо у файл
		$result_row = implode(" ", $result_arr_row).PHP_EOL;
		file_put_contents($file_name, $result_row, FILE_APPEND);
	}
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$length = post('length');
	$name = 'inc/scripts/3/text.txt';

	//виведення початкового місту файлу
	$file_before = file($name);
	foreach ($file_before as $value) {
		echo "$value.<br/>";
	} 

	deleteWords('inc/scripts/3/text.txt', $length);

	//виведення результату
	echo "--------------------------------<br>";
	$res = file($name);
	foreach ($res as $value) {
		echo "$value<br/>";
	} 
}

