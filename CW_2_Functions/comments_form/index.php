<?php
define('COMMENTS_DB', 'comments.txt');
require 'functions.php';
require 'captcha.php';
session_start();

$flashMsg = get('flashMsg');

if (requestIsPost()) {
	if (formIsValid()) {
		$comment = $_POST;
		$comment['id'] = uniqid();
		$comment['datetime'] = date('Y-m-d H:i:s');
		$comment['rating'] = 0;
		$comment = json_encode($comment);
		file_put_contents(COMMENTS_DB, $comment . PHP_EOL, FILE_APPEND);
		
		redirect('?flashMsg=OK');
	}
	$flashMsg = 'Fill all the fields plzzz';	
}

if (get('action') == 'update_rating') {
    $updateID = get('id');
    if(get('rating') == "increase"){
        updateRating($updateID, 1);
    }
    elseif(get('rating') == "decrease"){
        updateRating($updateID, -1);
    }
    redirect("index.php");
}
if(get('action') == 'delete'){
	$delete_id = get("id");
	deleteComment($delete_id);
	redirect("index.php");
}
//Число для каптчі в сесію
$_SESSION['captcha'] = rand(111111, 999999);
captcha();
$comments = loadComments();
moderate($comments);

//----------HTML Layout-----------------
require "layout.php";
//----------HTML Layout-----------------


