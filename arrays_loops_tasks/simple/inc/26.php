<?php
$arr = array();
//Заповняємо масив випадковими чсилами від -50 до 100
//Зробив rand(-50, 100) не за умовою задачі для того
//щоб були числа менше і більше нуля
for($i = 0; $i < 20; $i++){	
	$arr[] = rand(-50, 100); 
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