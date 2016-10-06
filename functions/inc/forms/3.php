<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
		<legend>Вхідні дані</legend>
		<label for="length">Виберіть допустиму довжину слів</label>
		<input type="number" id="length" name="length" placeholder="Допустима довжина">
		<button type="submit">Фільтрувати</button>
		<input type="hidden" name="id" value="<?=$id?>">
</form>