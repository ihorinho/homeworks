<?php
$arr = array();
$min = (int)$_POST["min"];
$max = (int)$_POST["max"];
for($i = 0; $i < 10; $i++){
	$arr[] = rand($min, $max);
}

echo "<pre>";
print_r($arr);
echo "Елементи масиву більші 0 з парними індексами: <br/>";
$product = 1;
foreach ($arr as $key => $value) {
	if(($key % 2 == 0) && $value > 0){
		echo "$value | ";
		$product *= $value;
	}
}
echo "<br/> Добуток = $product <br/>";
echo "Елементи масиву більші 0 з непарними індексами: <br/>";
foreach ($arr as $key => $value) {
	if(($key % 2 != 0) && $value > 0){
		echo "$value | ";
		$product *= $value;
	}
}
?>