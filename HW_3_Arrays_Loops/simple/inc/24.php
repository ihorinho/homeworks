<?php
$number = 442158755745 ;
$my_num = 5;
if(!is_numeric($number))
	exit("Ви ввели не число! - $number");
else {
	$string = (string)$number;
	$count = 0;
	for($i = 0; $i < strlen($string); $i++){
		 if ($string[$i] == $my_num) 
		 	$count++;
	}
	if(!$count) {
		echo "Число $my_num жодного разу не входить в число $number";
	}
	else{
		echo "Число $my_num входить $count разів в число $number";
	}
}
?>