<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 6 - Add pictures to gallery</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?= isset($_GET['msg']) ? $_GET['msg'] : null ?>
<h1>Gallery</h1>
<form action="<?= $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
    <p>Upload pictures</p>
    <label for="picture">Загрузити більше картинок...</label>
    <input type="file" id="picture" name="picture[]" multiple><br>
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
