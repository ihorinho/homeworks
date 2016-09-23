<?php
$arr = array(4, 2, 5, 19, 13, 0, 10);
$e = [2,3,4];
foreach($arr as $numb){
	if(in_array($numb, $e))
		exit("Есть!");
}
echo "Нет!";
?>