<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$a = trim($_POST["num1"]);
	$b = trim($_POST["num2"]);
	$result = "";
	$operator = $_POST["operator"];

	if(($operator=="/" || $operator=="%") && $b == 0) 
		die("На 0 ділити не можна");
	echo "Result => ";
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
}

