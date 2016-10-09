<?php
//todo:  Добавьте кнопку удаления комментария
// todo: add checkbox for user wants to publish email
// todo add rating to comments +/-, use uniqid()
//todo: попробовать вместо serialize/unserialize использовать json_encode / json_decode
//todo: разметку перенести в файл layout.php и сделать require layout.ph

define('COMMENTS_DB', 'comments.txt');
require 'functions.php';
dd($_POST);
dd($_GET);
dd(ifPublish());
$flashMsg = get('flashMsg');

if (requestIsPost()) {
	if (formIsValid()) {
		$comment = $_POST;
		$comment['id'] = uniqid();
		$comment['datetime'] = date('Y-m-d H:i:s');
		// $comment['publish_email'] = 1; // or 0  --- ifPublishEmail()
		$comment = serialize($comment);
		file_put_contents(COMMENTS_DB, $comment . PHP_EOL, FILE_APPEND);
		
		redirect('?flashMsg=OK');
	} 
	
	$flashMsg = 'Fill all the fields plzzz';	
}

if(get("id") !== null){
}
if (get('action') == 'update_rating') {
	
}

$comments = loadComments();
moderate($comments);

//----------HTML Layout-----------------
require "layout.php";
//----------HTML Layout-----------------


