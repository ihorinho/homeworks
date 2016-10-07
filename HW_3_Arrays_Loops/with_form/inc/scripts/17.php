<?php
$month = strtoupper($_POST["month"]); 
$month_of_year = array("JANUARY", "FEBRUARY", "MARCH", "APRIL","MAY", "JUNE",
						"JULY", "AUGUST","SEPTEMBER","OCTOBER","NOVEMBER","DECEMBER");
echo "<ul>";
foreach ($month_of_year as $value) {
	echo "<li ";
	echo $value == $month ? "style = 'font-weight: bold'" : '';
	echo "> $value</li>";
}
echo "</ul>";
?>