<?php
$month = "September"; 
$month_of_year = array("January", "February", "March", "April","May", "June",
						"July", "August","September","October","November","December");
echo "<ul>";
foreach ($month_of_year as $value) {
	echo "<li ";
	echo $value == $month ? "style = 'font-weight: bold'" : '';
	echo "> $value</li>";
}
echo "</ul>";
?>