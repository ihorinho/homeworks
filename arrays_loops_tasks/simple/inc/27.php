<?php
$row = rand(3, 10);
$cols = rand(3,10);
$colors = array('red','yellow','blue','gray','maroon','brown','green');
echo "<table border=1>";
for($i = 0; $i < $row; $i++){
	echo "<tr>";
	for ($j = 0; $j < $cols; $j++) { 
		echo "<td style='background-color: ".$colors[rand(0,6)]."'>".rand()."</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>