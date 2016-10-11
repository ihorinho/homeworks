<!--todo-done Use Bootstrap-->
<!doctype html>
<html>
<head>
    <title>Comments page</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<h1>Comments</h1>

<b><?=$flashMsg?></b>
<div class="container">
<form method='post'>
    <div class="form-group">
        <label for="username">Name:</label>
        <input type='text' class="form-control" name='username' id="username" autofocus ='<?= post('username') ?>'> <br>
        <label for="email">Email:</label>
        <input type='email' class="form-control" name='email' id="email" value="<?= post('email') ?>"> <br>
        <label for="message">Message:</label>
        <textarea class="form-control" name='message' id='message'><?= post('message') ?></textarea><br>
        <div class="checkbox">
            <label>
                <input type='checkbox' id='publish' name='publish'>
                Publish email?
            </label>
        </div>
        <button class="btn btn-info" type='submit'>Send</button>
    </div>
</form>
</div>
<hr>
<div class="comments">
    <?php foreach ($comments as $comment) : ?>
        <b><?=$comment['username']?></b> <?=$comment['datetime'] . " Рейтинг: " . $comment['rating'] . " "?>
        <a href="?action=update_rating&rating=increase&id=<?=$comment["id"]?>">+</a>/
        <a href="?action=update_rating&rating=decrease&id=<?=$comment["id"]?>">-</a><br>
        <?php echo isset($comment['publish']) ? "<i> e-mail: " . $comment['email'] . "</i><br>" : null  ?>
        <?=$comment['message']?><br><a class="btn btn-danger btn-sm" href="?action=delete&id=<?=$comment["id"]?>">Delete</a>
        <br><br>
    <?php endforeach;?>
</div>

</body>
</html>