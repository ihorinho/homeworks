<?php
$arr = explode(",", $_POST["array"]);

echo "<pre>";
print_r($arr);

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
echo "<br> Min item[{$key_min}] = $min | Max item[{$key_max}] = $max </br>";
print_r($arr);
?>