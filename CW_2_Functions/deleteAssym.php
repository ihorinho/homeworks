<?php
function deleteAssym(array &$arr){
	$arr = array_filter($arr, function($number){
		if(!is_numeric($number)){
			return 1;
		}
		$copy_numb = $number;
		settype($copy_numb,'string');
		$length = strlen($copy_numb);
		$rev_numb ="";
		for($i = $length-1; $i >= 0; $i--){
			$rev_numb .= $copy_numb[$i];
		}
		return $rev_numb == $copy_numb ? 1 : 0;
	});
	return $arr;	
}	

$a = [234,4,333,'sgfhj',8375738,34,"abc",234,6,36,342,true,242];

print_r(deleteAssym($a));

?>