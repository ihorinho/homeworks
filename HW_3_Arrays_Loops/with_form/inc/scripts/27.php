<?php
$rows = !empty($_POST["rows"]) ? (int)$_POST["rows"] : 3;
$cols = !empty($_POST["cols"]) ? (int)$_POST["cols"] : 3;
$colors = array('red','yellow','blue','gray','maroon','brown','green');
echo "<table border=1>";
for($i = 0; $i < $rows; $i++){
	echo "<tr>";
	for ($j = 0; $j < $cols; $j++) { 
		echo "<td style='background-color: ".$colors[rand(0,6)]."'>".rand()."</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>