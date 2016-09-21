<div class="nav">
		<ul>
			<li><a href="../index.php">На головну</a></li>
			<?php	for($i = 1; $i <= $li_count; $i++){
				echo "<li";
				echo $id==$i ? ' class="active"' : '';
				echo "><a href='index.php?id={$i}''>Завдання {$i}</a></li>";
			}
			?>
		</ul>
	</div>