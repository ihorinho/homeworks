<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
		<legend>Вхідні дані</legend>
		<p>Калькулятор</p>
		<label for="num1">Число 1</label>
		<input type="number" id="num1" name="num1" placeholder="Example: 4">
		<label for="operator">Оператор</label>
		<input type="text" id="operator" name="operator" placeholder="+, -, *, /, %">
		<label for="num2">Число 2</label>
		<input type="number" id="num2" name="num2" placeholder="Example: 4">
		<button type="submit">Обчислити</button>
		<input type="hidden" name="id" value="<?=$id?>">
</form>