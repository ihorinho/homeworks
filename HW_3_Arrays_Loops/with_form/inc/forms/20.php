<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
		<legend>Вхідні дані</legend>
		<label for="rows">Введіть кількість рядів</label>
		<input type="text" id="rows" name="rows" placeholder="Example: 10" >
		<button type="submit">Send</button>
		<input type="hidden" name="id" value="<?=$id?>">
</form>