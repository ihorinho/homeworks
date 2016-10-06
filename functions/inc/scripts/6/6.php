<?php
function moveToDirectory($input_name, $directory){
    $picture_name = basename($_FILES[$input_name]["name"]);
    $destination = $directory . $picture_name;
    move_uploaded_file($_FILES[$input_name]["tmp_name"], $destination);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 6 - Add pictures to gallery</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
//todo-important multiple downloads
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!empty($_FILES)) {
            moveToDirectory("picture", "gallery/");
        }
    }
?>
<h1>Gallery</h1>
<form action="<?= $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
    <p>Upload pictures</p>
    <label for="picture">Загрузити більше картинок...</label>
    <input type="file" id="picture" name="picture" multiple><br>
    <button type="submit">Завантажити!</button>
</form>
<table class="gallery-content">
    <?php
        $dir = opendir("gallery");
        while ($picture = readdir($dir)):
             if (is_file("gallery/" . $picture)):
    ?>
        <tr class="gallery-item">
            <td><img src="<?= "gallery/" . $picture ?>" alt="Тут має бути <?= $picture ?>"></td>
        </tr>
     <?php ENDIF; ENDWHILE; ?>
</table>
</body>
</html>