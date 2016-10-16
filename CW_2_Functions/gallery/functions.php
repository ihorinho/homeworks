<?php
//Переформатовуємо масив отриманних файлів в зручнішу структуру
function reArrayFiles(&$file_post) {

    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);

    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }
    return $file_ary;
}

function fileHasNoError(array $file)
{
    return !$file['error'];
}
//Allowed types
function fileIsOfTypes(array $file)
{
    $allowed_types = ['image/jpeg', 'image/pjpeg', 'image/gif', 'image/png' ];
    return in_array($file['type'], $allowed_types);
}

//Видалення фотографії з альбому
//Якщо передаємо $move=true, то файл буде стертий зі старого альбому, а потім записний в вибраний
function deleteFromAlbums($move = false){
    $get = $_GET;
    $del_name = $get['file'];
    $album_name = $get['move'];
    $title = $get['title']; 
    $albums = unserialize(file_get_contents(ALBUMS_FILE));
    foreach ($albums as $album => $pictures) {
        if(array_key_exists($del_name, $albums[$album])){
            unset($albums[$album][$del_name]);
        }       
    }
    if($move){
        $albums[$album_name][$del_name] = $title;
    }
    file_put_contents(ALBUMS_FILE, serialize($albums));
}

//Виводимо на екран помилки, які були виявлені при завантаженні
function printErrors($filename){
    $errors_ary = file($filename);
    foreach($errors_ary as $key => $error_string){
        echo "Error {$key}: " . $error_string . "<br>";
    }
}

//Виводимо повідомлення
function flashMsg(){
    $msg = isset($_GET['msg']) ? $_GET['msg'] : null;
    if($msg === null) {
        return null;
    }
    elseif($msg === 'errors'){
        printErrors(ERRORS_FILE);
    }
    else{
        echo $msg;;
    }
}

//Формуємо підпис до катринки
function formTitle($name){
    $arr_name = explode('.', $name);
    array_pop($arr_name);
    $new_name = implode('.', $arr_name);
    return $new_name;
}

//Обгортки для роботи з $_GET, $_POST, headers
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
    return (bool)($_SERVER['REQUEST_METHOD'] == 'POST');
}
function redirect($to)
{
    header('Location: ' . $to);
    die;
}