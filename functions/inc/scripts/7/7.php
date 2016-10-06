<?php
	function post ($key){
		return isset($_POST[$key]) ? $_POST[$key] : null;
	}
	if($_POST){
		$data = $_POST;
		$data['date'] = date("d-m-Y о H:i:s", time());
		file_put_contents("data.txt", serialize($data).PHP_EOL, FILE_APPEND);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Guest book</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="comments">
		<?php
			$comments_rows = file("data.txt");
			foreach ($comments_rows as $item):
				$row = unserialize($item);
		?>
			<div class="comments-item">
				<b><?=$row['username']?></b><i> <?=$row['email']?></i><br>
				<?=$row['date']?> написав:
				<p class="comment"><?=$row['message']?></p>
			</div><br>
		<?php			
			ENDFOREACH;
		?>
	</div><hr>
	<p>Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и 
	добавить его. Все добавленные комментарии выводятся над текстовым полем.</p><hr>
	<div class="form">
		<?php require "form.php" ?>
	</div>
</body>
</html>