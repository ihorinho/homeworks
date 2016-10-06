<?php
	require "func.php";
	if($_POST){
		$data = $_POST;
		$data['message'] = clearMessage($data['message']);
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
	<p> Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его. 
		Все добавленные комментарии выводятся над текстовым полем. Реализовать проверку на наличие в тексте запрещенных слов, матов. 
		При наличии таких слов - выводить сообщение "Некорректный комментарий". 
		Реализовать удаление из комментария всех тегов, кроме тега "<b>".</p><hr>
	<div class="form">
	<?php require "form.php"; ?>
	</div>
</body>
</html>