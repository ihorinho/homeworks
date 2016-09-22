<?php
$a = 15;
$b = 4;
$result = "";
$operator = "*";

if(($operator=="/" || $operator=="%") && $b == 0) 
	die("На 0 ділити не можна");

switch ($operator) {
	case '+':
		echo $a + $b;
		break;
	case '-':
		echo $a - $b;
		break;
	case '*':
		echo $a * $b;
		break;
	case '/':
		echo number_format($a / $b, 2);
		break;
	case '%':
		echo $a % $b;
		break;
	
	default:
		echo "Невірний оператор";
}

