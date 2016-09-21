<?php
$day = "Wednesday";
$days_of_week = array("Monday", "Tuesday", "Wednesday", "Thursday","Friday", "Saturday", "Sunday");
echo "<ul>";
foreach ($days_of_week as $value) {
	echo "<li ";
	echo $value == $day ? "style = 'font-style: italic'" : '';
	echo "> $value</li>";
}
echo "</ul>";
?>
