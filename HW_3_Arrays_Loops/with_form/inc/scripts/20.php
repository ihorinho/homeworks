<?php
$rows = $_POST["rows"];
for($i = 1; $i <= $rows; $i++){
	for($j = 1; $j <= $i; $j++){
		echo "x";
	}
	echo "<br/>";
}
?>