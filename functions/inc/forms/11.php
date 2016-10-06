<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
		<legend>Вхідні дані</legend>
		<label for="text">Введіть текст</label>
		<textarea id="text" name="text" rows="10" placeholder="Enter your text here..."></textarea>
		<button type="submit">Переписати</button>
		<input type="hidden" name="id" value="<?=$id?>">
</form>