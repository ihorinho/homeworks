<?php
$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня 
	черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша 
	яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';

$arr_unique = array_unique(preg_split("/\s/", $string, -1, PREG_SPLIT_NO_EMPTY));
$result_arr = [];
foreach ($arr_unique as $item) {
	$count = substr_count($string, $item);
	$result_arr[$item] = $count;
}
unset($item);
arsort($result_arr);
foreach ($result_arr as $key => $item) {
	echo $key . " - " . $item . "<br/>";
}
?>