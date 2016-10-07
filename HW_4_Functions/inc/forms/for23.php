<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
		<legend>Вхідні дані</legend>
		<label for="numb">Введіть число</label>
		<input type="text" id="numb" name="number" placeholder="Example: 15311">
		<button type="submit">Count sum</button>
		<input type="hidden" name="id" value="<?=$id?>">
</form>