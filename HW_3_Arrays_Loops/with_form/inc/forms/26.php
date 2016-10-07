<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
		<legend>Вхідні дані</legend>
		<p>Виберіть діапазон чисел для ф-ї rand();</p>
		<label for="min">rand(min)</label>
		<input type="number" id="min" name="min" placeholder="Example: -10">
		<label for="max">rand(max)</label>
		<input type="number" id="max" name="max" placeholder="Example: 100">
		<button type="submit">Send</button>
		<input type="hidden" name="id" value="<?=$id?>">
</form>