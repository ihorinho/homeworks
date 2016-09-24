<?php
$rows = !empty($_POST["rows"]) ? (int)$_POST["rows"] : 3;
$cols = !empty($_POST["cols"]) ? (int)$_POST["cols"] : 3;

echo "<table border=1>";
for($i = 1; $i <= $rows; $i++){
	echo "<tr>";
	for ($j = 1; $j <= $cols; $j++) { 
		echo "<td align = center>".$i * $j."</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>