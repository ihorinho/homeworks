	<?php
	function post ($key){
		return isset($_POST[$key]) ? $_POST[$key] : null;
	}
	function clearMessage($data){
		$arr_bad = array('Fuck','fuck', 'bitch', 'dirk', 'bullshit', 'shit');
		return str_replace($arr_bad, "****", strip_tags($data, "<b>"));
	}