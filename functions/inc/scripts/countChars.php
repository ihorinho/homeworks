<?php
	$text = $_POST["text"];
	$ok = true;

	function countChars($string, $char){
		$count = 0;
		for($i = 0, $length = strlen($string); $i < $length; $i++){
			if($string[$i] == $char)
				$count++;
		}
		return $count;
	}

	$curly_op  = countChars($text, "{");
	$curly_cl = countChars($text, "}");
	$box_op = countChars($text, "[");	
	$box_cl = countChars($text, "]");
	$round_op = countChars($text, "(");
	$round_cl = countChars($text, ")");
	

	echo $text."<hr/>";

	if($curly_op != $curly_cl) {
		echo "<b>Некоректно розставлені { }</b><br/>";
		$ok = false;
	}
	if($box_op != $box_cl){
		echo "<b>Некоректно розставлені [ ]</b><br/>";
		$ok = false;
	}
	if($round_op != $round_cl){
		echo "<b>Некоректно розставлені ( )</b><br/>";
		$ok = false;
	}
	echo  $ok ? "Всe правильно!" : "Треба виправити!";
?>