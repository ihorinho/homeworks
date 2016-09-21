<?php
	$id = "1";
	$li_count = 28;
	if(isset($_GET["id"]))
		$id = $_GET["id"];
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
			<h1>Задачи по массивам и циклам</h1>
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
			<tr>
				<td colspan="2">
					<pre>
						<?php
							$content = file("inc/$id.php");
							echo "<p>&lt;&#063;&#112;&#104;&#112;</p>";
							foreach ($content as $value) {
								echo "<p>$value</p>";
							}	
						?>
					</pre>	
				</td>
			</tr>
			<tr>
				<td class="result">
					Output:
				</td>	
				<td>
					<?php
						include "inc/$id.php"
					?>
				</td>
			</tr>
		</table>
		</div>
	</main>
	<footer>
		<div class="content">
			<p>
				Copyright &copy; 2016 Igor Pelekhatyy
			</p>
		</div>
	</footer>
</body>
</html>