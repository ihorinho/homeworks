<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
		<legend>Вхідні дані</legend>
		<label for="arr">Введіть елементи масиву через кому</label>
		<input type="text" id="arr" name="array" placeholder="Example: 2,3,4,56,2,1">
		<button type="submit">Check</button>
		<input type="hidden" name="id" value="<?=$id?>">
</form>