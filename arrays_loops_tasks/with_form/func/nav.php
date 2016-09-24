<div class="nav">
		<ul>
			<li><a href="../../index.php?id=4">Назад</a></li>
			<li><a href="../../index.php">На головну</a></li>
			<?php	foreach ($li_arr as $key => $value) {
				echo "<li";
				echo $id==$value ? ' class="active"' : '';
				echo "><a href='index.php?id={$value}''>Завдання {$value}</a></li>";
			}
			?>
		</ul>
	</div>