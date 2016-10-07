<?php

function getFilespattern($path, $name){
	if(!is_dir($path)){
		die("Невірно вказаний каталог");
	}
	$dir = opendir($path);
	echo "<ul>";
	while($fname = readdir($dir)){
		if(is_file(__DIR__."/".$fname) && preg_match("/{$name}/i", $fname)){
			echo $fname."<br/>";
		}
		else continue;		
	}
	echo "</ul>";
	closedir($dir);
}

getFilespattern("inc/scripts","print");