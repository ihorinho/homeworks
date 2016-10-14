<?php
function redirect($to){
    header("Location: $to");
}

function reStructFiles(array $array){
    foreach($array as $key => $value_arr){
        foreach($value_arr as $index => $value){
            $rearr[$index][$key] = $value;
        }
    }
    return $rearr;
}

function moveToDirectory($file, $directory){
    $picture_name = basename($file["name"]);
    $destination = $directory . $picture_name;
    move_uploaded_file($file["tmp_name"], $destination);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = false;
    $files = $_FILES;
    $files = reStructFiles($files['picture']);
    foreach($files as $value){
        if($value['error'] !== 0){
            $error = $error || 1;
            continue;
        }
        moveToDirectory($value, "gallery/");
    }
    if(!$error){
        redirect("?msg=Successfully uploaded");
    }
    else {
        redirect("?msg=Errors%20were%20found");
    }
}
//-----------------HTML Layout
require_once "layout.php";
//-----------------HTML Layout