<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
		<legend>Вхідні дані</legend>
		<label for="mon">Введіть поточний місяць</label>
		<input type="text" id="mon" name="month" placeholder="Example: January">
		<button type="submit">Send</button>
		<input type="hidden" name="id" value="<?=$id?>">
</form>