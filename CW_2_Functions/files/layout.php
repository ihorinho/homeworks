<!doctype html>
<html>
	<head>
		<title>Gallery</title>
		<style>
			div{
				display: inline-block;
				text-align: center;
				margin-bottom: 15px;
				margin-right: 10px;
			}
			div a {
				text-decoration: none;
			}
			div a:hover{
				border: 1px solid red;
				color: #fff;
				background-color: red;
				border-radius: 3px;
			}
		</style>
	</head>
	<body>
    <?= flashMsg()?>
		<h2>Gallery</h2>

		<hr>

		<form 	method='post'
				enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="<?=MAX_FILE_SIZE?>">
			<input type="file" name="attachment[]" multiple>
			<button type='submit'>Go</button>

		</form>
<hr>

<?php foreach ($files as $file) : ?>
	<div>
    <img width=<?=PICTURE_WIDTH?> src='uploads/<?=$file?>' width='100' alt="<?=$file?>"><br>
	<?=$titles[$file]?>
    <a href="?action=delete&amp;file=<?=$file?>">		Delete
    </a></div>
<?php endforeach;?>

</body>
</html>
