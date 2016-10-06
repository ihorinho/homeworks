<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
		<legend>Вхідні дані</legend>
		<label for="text1">Поле для тексту 1</label>
		<textarea id="text1" name="text1" rows="10" placeholder="Enter your text here..."></textarea>
		<label for="text2">Поле для тексту 1</label>
		<textarea id="text2" name="text2" rows="10" placeholder="Enter your text here..."></textarea>
		<button type="submit">Виконати!</button>
		<input type="hidden" name="id" value="<?=$id?>">
</form>