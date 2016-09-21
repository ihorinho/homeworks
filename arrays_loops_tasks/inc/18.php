<?php
$days_of_week = array("Monday", "Tuesday", "Wednesday", "Thursday","Friday", "Saturday", "Sunday");
echo "<ul>";
foreach ($days_of_week as $value) {
	echo "<li ";
	echo ($value == "Saturday" || $value == "Sunday") ? "style = 'font-weight: bold'" : '';
	echo "> $value</li>";
}
echo "</ul>";
?>
