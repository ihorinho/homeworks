<?php
	$li_arr = [1,2,3,4,5,6,9,10,11,12,13,"realPrint_R","countChars","writeLine","for23","maxTomin"];
	$id = reset($li_arr);
	if(isset($_GET["id"]))
		$id = $_GET["id"];
	if(isset($_POST["id"]))
		$id = $_POST["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Домашка от 20_09</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
	<main>
		<!--Navigation-->
		<?php
			include "func/nav.php";
		?>
		<!--Navigation-->	
		<div class="content">
			<h1>Функції</h1>
		<table>
			<tr>
				<td class="task">
					Task:
				</td>
				<td><?php
					$ini = parse_ini_file("func/task.ini");
					print_r($ini[$id]);
					?>
				</td>
			</tr>
			<?php			
				if($_SERVER["REQUEST_METHOD"] == "POST" || !file_exists("inc/forms/$id.php"))
					include "func/table.php";
			?>
		</table>	
		<?php
			if($_SERVER["REQUEST_METHOD"] != "POST" && file_exists("inc/forms/$id.php"))
				include "inc/forms/$id.php";
		?>
		</div>
	</main>
	<footer>
		<p>
			Copyright &copy; 2016 Igor Pelekhatyy
		</p>
	</footer>
</body>
</html>