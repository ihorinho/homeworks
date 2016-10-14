<?php
//todo-done: Flash messages for all actions
//todo-done: Safe delete image
//todo-done: Images with titles
//todo: Albums with images
//todo-done: popular types of images
//todo-done: обмеження на розмір(динамічне)
//todo-DONE: Зменшити/збільшити динамічно картинку
//todo-done: Інфо про файли, які не загрузилися

//Константи
define('PICTURE_WIDTH', '250px');
define("MAX_FILE_SIZE", 1512000);
define("ERRORS_FILE", 'errors.txt');
define("TITLES_FILE", 'titles.txt');
require_once 'functions.php';

if (!file_exists('uploads')) {
	mkdir('uploads');
}

//Main
if (requestIsPost()) {
    if($_FILES['attachment']['error'][0] === 4){
        redirect("?msg=Error:%20File%20not%20selected");
    }
    file_put_contents(ERRORS_FILE, "");
	if (isset($_FILES['attachment'])) {
		$files = $_FILES['attachment'];	
		$files = reArrayFiles($files);
        $errors_ary = array();
        $title_ary = unserialize(file_get_contents(TITLES_FILE));
		foreach ($files as $file) {
            if($file['error'] === 2){
                $error = $file['name'] . " filesize more then allowed " . MAX_FILE_SIZE . " Bytes";
                $handle = fopen(ERRORS_FILE, "a+");
                fwrite($handle, $error . PHP_EOL);
                fclose($handle);
                continue;
            }
            if (!fileIsOfTypes($file)) {
                $error = $file["name"] . " - " . $file['type'] . " - not allowed type";
                $handle = fopen(ERRORS_FILE, "a+");
                fwrite($handle, $error . PHP_EOL);
                fclose($handle);
                continue;
            }
            if (!fileHasNoError($file)) {
                $errors = $file['name'] . " - upload error";
                $handle = fopen(ERRORS_FILE, "a+");
                fwrite($handle, $error . PHP_EOL);
                fclose($handle);
                continue;
            }
			$filename = $titlename =  uniqid();
			$extension = explode('.', $file['name']);
			$extension = end($extension);
			// new full filename
			$filename .= ".$extension";

			$move_result = move_uploaded_file(
				$file['tmp_name'], 
				'uploads/' . $filename
			);

			if (!$move_result) {
				echo 'Move upload fail';
				continue;			
			}

            $title_ary[$filename] = formTitle($file['name']);
		}
        file_put_contents(TITLES_FILE, serialize($title_ary));
		if(filesize(ERRORS_FILE) === 0){
			redirect('?msg=Successfully%20uploaded');
		}
		else{
			redirect('?msg=errors');
		}
	}
}
//Delete picture
if (get('action') == 'delete') {
    $filename = 'uploads/' . get('file');
    if(!file_exists($filename)){
        redirect('?msg=file%20not%20exists');
    }
	unlink('uploads/' . get('file'));
    redirect('?msg=Successfully%20deleted');
}

//Відкидаємо директорії "." i ".." зі списку файлів
$files = scandir('uploads');
array_shift($files);
array_shift($files);
$titles = unserialize(file_get_contents(TITLES_FILE));

//-------HTML-LAYOUT-------------------------------
require "layout.php";
//-------HTML-LAYOUT-------------------------------
