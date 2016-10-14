<?php

$file = fopen('data.txt', 'w');
fwrite($file, PHP_EOL . 'Wow');
fclose($file);

unlink('data.txt');
$arr = scandir('../');
foreach ($arr as $item) {
	echo $item . ' ';
	var_dump(is_file($item));
	echo '<br>';
}

mkdir('new_folder');
chmod('new_folder', 0755);





//fwrite($file, 'Hello');
//fwrite($file, ' world');
/*echo ftell($file);
echo '<br>';
echo filesize('data.txt');
echo '<br>';
echo fread($file, 2);
echo '<br>';
echo ftell($file);
echo '<br>';
fseek($file, 1);
echo ftell($file);*/
// echo fread($file, filesize('data.txt'));
