<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gallery</title>
</head>
<body>
	<h1>Gallery</h1>
	<pre>
		<?php print_r($_FILES);?>
	</pre>
	<form method="post" enctype="multipart/form-data">
		<input type="file" name="attachment">
		<button>Go</button> 
	</form>
</body>
</html>
