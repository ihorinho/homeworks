<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
		<legend>Вхідні дані</legend>
		<label for="number">Введіть число</label>
		<input type="text" id="number" name="number" placeholder="Example: 15311">
		<label for="numb">Введіть цифру</label>
		<input type="number" min="0" max="9" id="numb" name="numb" placeholder="0">
		<button type="submit">Count occurrences</button>
		<input type="hidden" name="id" value="<?=$id?>">
</form>