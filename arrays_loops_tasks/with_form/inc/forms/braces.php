<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
		<legend>Вхідні дані</legend>
		<label for="text">Введіть текст</label>
		<textarea id="text" name="text" rows="10" placeholder="Enter your code here..."></textarea>
		<button type="submit">Check!</button>
		<input type="hidden" name="id" value="<?=$id?>">
</form>