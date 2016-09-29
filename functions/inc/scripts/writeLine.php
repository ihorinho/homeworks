<?php

function writeLine($char = "-", $length = 10){
	for($i = 1; $i <= $length; $i++){
		echo $char;
	}
}

echo "<h3>Задача №20</h3>";
for($i = 1; $i <= 20; $i++){
	writeLine('*', $i);
	echo "<br/>";
}

echo "<hr/><h3>Задача №21</h3>";
for($i = 1; $i <= 9; $i++){
	writeLine($i, $i);
	echo "<br/>";
}
?>