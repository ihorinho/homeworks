<?php
$rows = 10;
$cols = 10;
echo "<table border=1>";
for($i = 1; $i < $rows; $i++){
	echo "<tr>";
	for ($j = 1; $j < $cols; $j++) { 
		echo "<td align = center>".$i * $j."</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>