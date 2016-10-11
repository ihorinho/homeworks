<?php
//todo-done: кнопка для видалення коментаріїв
//todo-done: Рейтинг повідомлень
//todo-done: Розмітку перенести в layout.php
//todo-done: Try to use json_encode/json_decode instead of serialize
//TODO-DONE Checkbox to publish e-mail
function dd($a)
{
	echo '<pre>';
	print_r($a);
	echo '</pre>';
}

function post($key, $default = null)
{
	return isset($_POST[$key]) ? $_POST[$key] : $default;
}

function get($key, $default = null)
{
	return isset($_GET[$key]) ? $_GET[$key] : $default;
}

function requestIsPost()
{
	return (bool)$_POST;
}

function formIsValid()
{
	return 	post('username') != '' && 
			post('email') !='' && 
			post('message') != '';
}

function redirect($to)
{
	header('Location: ' . $to);
	die;
}

function loadComments($file = COMMENTS_DB)
{
	$commentsRaw = file($file);
	$comments = [];

	foreach ($commentsRaw as $comment) {
	$comments[] = json_decode($comment, true);

	}
	return $comments;
}

function moderate(array &$comments){
	// todo-done use array_walk() instead of foreach
	// todo-done: as -> **, beach -> b***h
    array_walk($comments, function(&$item){
        $badWords = ['ass', 'asshole', 'bitch', 'smack', 'fuck', 'shit', 'bastard', 'dirk'];
        $replace_badWords = ['a*s', 'a*****e','b***h', 's***k', 'f**k', 's**t', "b*****d", "d**k"];
        $item['message'] = str_replace($badWords, $replace_badWords, $item['message']);
    });
}
//Функція для зміни рейтингу повідомлень
function updateRating($id, $num){
	$commentRaws = file(COMMENTS_DB);
	file_put_contents(COMMENTS_DB, "");
	foreach($commentRaws as $row){
		if(substr_count($row, $id)){
			$decoded_row = json_decode($row, true);
			$decoded_row['rating'] += $num;
            var_dump($decoded_row);
			$row = json_encode($decoded_row);
			file_put_contents(COMMENTS_DB, $row.PHP_EOL, FILE_APPEND);
		}
		else{
			file_put_contents(COMMENTS_DB, $row, FILE_APPEND);
		}
	}
}
//Функція для видалення коментаріїв
function deleteComment($id){
	$commentRaws = file(COMMENTS_DB);
	file_put_contents(COMMENTS_DB, "");
	foreach($commentRaws as $row){
		if(substr_count($row, $id)){
			continue;
		}
		else{
			file_put_contents(COMMENTS_DB, $row, FILE_APPEND);
		}
	}
}










