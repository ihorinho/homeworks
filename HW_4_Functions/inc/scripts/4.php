<?php

function getFileslist($path){
	if(!is_dir($path)){
		die("Невірно вказаний каталог");
	}
	$dir = opendir($path);
	echo "<ul>";
	while(false !==($fname = readdir($dir))){
		if(is_file(__DIR__."/".$fname)){
			echo "<li>{$fname}</li>";
		}
		else continue;
	}
	echo "</ul>";
	closedir($dir);
}

getFileslist("inc/scripts");