<?php
$number = $_POST["number"];
if(!is_numeric($number))
	exit("Ви ввели не число! - $number");
else {
	$string = (string)$number;
	$result = 0;
	for($i = 0; $i < strlen($string); $i++){
		$result += $string[$i];
	}
}
echo "You entered: $number <br/>";
echo "Sum = $result";
?>