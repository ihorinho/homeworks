<?php
$arr = explode(",",$_POST["array"]);
$count = 0;
echo "Entered array = [";
foreach($arr as $value){
	echo $count++ == 0 ? $value : ", $value";
}
echo " ]<br>Result: $count items";
?>
