<!doctype html>
<html>
	<head>
		<title>Gallery</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
    <?= flashMsg()?>
		<h2>Gallery</h2>
		
		<h3>Show album:</h3>
		<ul class = "show-album">
			<li><a href="index.php">All</a></li>
			<li><a href="?show=nature">Nature</a></li>
			<li><a href="?show=animals">Animals</a></li>
		</ul>

		<hr>

		<form 	method='post'
				enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="<?=MAX_FILE_SIZE?>">
			<input type="file" name="attachment[]" multiple>
			<button type='submit'>Go</button>

		</form>
<hr>

<?php if($titles){

	foreach ($titles as $file => $title) : ?>
	<div class="container">
		<div>
		    <img width=<?=PICTURE_WIDTH?> src='uploads/<?=$file?>' width='100' alt="<?=$title?>"><br>
			<?=$title?><br>
		    
	    </div>
	    <div class="menu">
	    <a class="delete" href="?action=delete&amp;file=<?=$file?>">Delete</a>
	    	 <ul class="image-menu">
		    	<li>Move to album
		    		<ul class="sub-menu">
		    			<li><a href="?move=nature&file=<?=$file?>&title=<?=$title?>">Nature</a></li>
		    			<li><a href="?move=animals&file=<?=$file?>&title=<?=$title?>">Animals</a></li>
		    		</ul>
		    	</li>
		    </ul>
	    </div>
    </div>
   
<?php endforeach; }?>

</body>
</html>
