<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
		<legend>Вхідні дані</legend>
		<label for="string">Введіть строку</label>
		<input type="text" id="string" name="string" placeholder="Строка">
		<button type="submit">Переписати</button>
		<input type="hidden" name="id" value="<?=$id?>">
</form>