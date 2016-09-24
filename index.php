<?php
	$nav = "main.php";
	if(isset($_GET["id"]))
		$nav = "loops.php"
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>My HomeWorks</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<main>
		<div class="content">
			<div class="about">
				<h2>HomeWorks</h2>
				<p>Igor</p>
				<p>Pelekhatyy</p>
			</div>
		<!-- Navigation -->
		<?php
			include "func/{$nav}";
		?>
		<!-- Navigation -->
		</div>
	</main>
</body>
</html>