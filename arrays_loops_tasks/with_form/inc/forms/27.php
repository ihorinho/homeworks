<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
		<legend>Вхідні дані</legend>
		<p>Виберіть розмірність таблиці</p>
		<label for="rows">Кількість строк</label>
		<input type="number" id="rows" name="rows" placeholder="Example: 4">
		<label for="cols">Кількість колонок</label>
		<input type="number" id="cols" name="cols" placeholder="Example: 4">
		<button type="submit">Нарисувати</button>
		<input type="hidden" name="id" value="<?=$id?>">
</form>