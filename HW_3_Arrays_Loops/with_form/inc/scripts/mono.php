<?php
$arr = explode(",",$_POST["array"]);
$count = count($arr);
//Заводимо дві зсінні для флагів
$inc = true;
$dec = true;
//Виводимо масив на екран
echo "Entered array = [";
foreach($arr as $key => $value){
	echo $key != 0 ? ", $value" : $value; 
}
echo " ]<br>";
//Виконуємо перевірки
for($i = 0; $i < $count - 1; $i++){
	$inc = $inc && ($arr[$i] <= $arr[$i + 1]);
}
for($i = 0; $i < $count - 1; $i++){
	$dec = $dec && ($arr[$i] >= $arr[$i + 1]);
}
echo $inc || $dec ? "Масив монотонний" : "Масив не монотонний";
?>
