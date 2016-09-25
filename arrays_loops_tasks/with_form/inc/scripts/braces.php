<?php
	$text = $_POST["text"];
	$curly_op = 0;
	$curly_cl = 0;
	$box_op = 0;
	$box_cl = 0;
	$round_op = 0;
	$round_cl =0;
	$ok = true;
	for($i = 0; $i < strlen($text); $i++){
		switch ($text[$i]) {
			case '{': $curly_op++; break;
			case '}': $curly_cl++; break;
			case '[': $box_op++; break;
			case ']': $box_cl++; break;
			case '(': $round_op++; break;
			case ')': $round_cl++; break;
		}
	}
	echo "<pre>";
	echo $text;
	echo "</pre><hr>";
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