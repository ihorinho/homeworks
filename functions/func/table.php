	<tr>
		<td colspan="2">
			<pre>
				<?php
					$content = file("inc/scripts/$id.php");
					foreach ($content as $value) {
						//Перетворимо спец. символи в html-теги
						$string = htmlspecialchars($value, ENT_QUOTES);
						echo "<p>$string</p>";
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
				include "inc/scripts/$id.php"
			?>
		</td>
	</tr>