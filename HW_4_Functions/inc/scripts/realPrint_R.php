<?php
$arr = [2, 3, ['ff','hjhh',23, 'vdvj',[12,'fdf'],12]];
$str = "It's string";
$num = 3784284;

function realPrint_R($data, $tab_size = 1) {
	if(is_scalar($data))
		echo $data." ";
	elseif(is_array($data)){
		//$tab - для відступів, при виведенні з тегом <pre>
		$tab = "";
		//Залежно від глибини рекурсії збільшуємо відступ
		for($i = 0; $i < $tab_size; $i++){
			$tab .= "    ";
		}
		//Окремо відступ для "(" i ")"
		$brace_tab = substr($tab, 0, strlen($tab)-4);
		echo "Array\n{$brace_tab}{$brace_tab}(\n";
		foreach($data as $key => $value){
			echo "{$tab}{$brace_tab}[{$key}] => ";
			//Викликаємо функцію рекурсивно
			//Якщо слідуючий елемент масиву - не масив, то не збільшуємо відступ
			//Якщо слідуючий елемент масиву теж масив, то збільшуємо відступ
			if(is_array($value))
				realPrint_R($value, ++$tab_size);
			else
				realPrint_R($value, $tab_size);
			echo "\n";
		}
		echo "{$brace_tab}{$brace_tab}) \n";
	}
	else
		echo gettype($data);
}

//Tests
realPrint_R($arr);
echo "<pre> <br>";
realPrint_R($arr);
echo "</pre><hr/>";
realPrint_R($str);
echo "<br/>";
realPrint_R($num);
?>