<?php
$a = [2,"jdslk", true, 3838, 23, [12, [34, 56, "erwr"], 12],"rgwg"];
$b = "esvns";
$c = true;
$d = 2323;

function myPrint_R(&$data){
	if(is_scalar($data)){
		return gettype($data) ."($data)";
	}
	static $count = 0;
	if($count == 0){
		reset($data);
		echo "Array ( ";
	}
	if($item = each($data)){
		echo "[$count] => ";
		echo is_array($item[1]) ? "Array(" . count($item[1], true) . ") " :  $item[1] . " ";
		$count++;
		myPrint_R($data);
	}
	else{
		echo " )";
	}
}


echo myPrint_R($a);
echo "<br>";
echo myPrint_R($b);
echo "<br>";
echo myPrint_R($c);
echo "<br>";
echo myPrint_R($d);
