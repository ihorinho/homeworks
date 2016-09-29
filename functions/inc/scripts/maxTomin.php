<?php
$array = explode(",", $_POST["array"]);

echo "<pre>";
print_r($array);

function maxTomin(&$arr){
	$min = $arr[0];
	$max = $arr[0];
	//Знаходимо найбільше і найменше значення
	foreach ($arr as $key => $value) {
		if ($value < $min) {
			$min = $value;
			$key_min = $key;  
		}
		if ($value > $max) {
			$max = $value;
			$key_max = $key;  
		}
	}
	//Міняємо місцями найбільше і найменше значення
	$arr[$key_min] = $max;
	$arr[$key_max] = $min;
}

maxTomin($array);

echo "<hr/>Після роботи функції maxTomin() <br/>";
print_r($array);
?>