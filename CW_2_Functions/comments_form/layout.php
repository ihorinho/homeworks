<!--todo Use Bootstrap-->
<!doctype html>
<html>
<head>
    <title>Comments page</title>
</head>

<body>
<h1>Comments</h1>

<b><?=$flashMsg?></b>
<form method='post'>

    <label for="username">Name:</label>
    <input type='text' name='username' id="username" value='<?=post('username')?>'> <br><br>

    <label for="email">Email:</label>
    <input type='email' name='email' id="email" value="<?=post('email')?>"> <br><br>

    <label for="message">Message:</label>
    <textarea name='message' id='message'><?=post('message')?></textarea><br><br>

    <label for='publish'>Publish email?</label>
    <input type='checkbox' id='publish' name='publish'>

    <button type='submit'>Go</button>
</form>

<hr>
<div>
    <?php foreach ($comments as $comment) : ?>
        <b><?=$comment['username']?></b> <?=$comment['datetime'] . " Рейтинг: " . $comment['rating'] . " "?>
        
        <a href="?action=update_rating&rating=increase&id=<?=$comment["id"]?>">+</a>/
        <a href="?action=update_rating&rating=decrease&id=<?=$comment["id"]?>">-</a><br>
        <?php echo isset($comment['publish']) ? "<i> e-mail: " . $comment['email'] . "</i><br>" : null  ?>
        <?=$comment['message']?><br><a href="?action=delete&id=<?=$comment["id"]?>">Видалити повідомлення</a>
        <br><br>
    <?php endforeach;?>

</div>

</body>
</html>