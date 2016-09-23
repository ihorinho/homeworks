<?php

$book1 = array(
    'author' => 'S. King',
    'title' => 'Carrie',
    'price' => 123.50
);

$book2 = array(
    'author' => 'F. Dostoevskii',
    'title' => 'Idiot',
    'price' => 223.50
);

$book3 = array(
    'author' => 'B. Stoker',
    'title' => 'Dracula',
    'price' => 315.76
);

$book4 = array(
    'author' => 'D. Brown',
    'title' => 'Inferno',
    'price' => 231.25
);

$book5 = array(
    'author' => 'M. Twain',
    'title' => 'Tom Sawyer',
    'price' => 159.00
);

$book6 = array(
    'author' => 'G. Martin',
    'title' => 'A Song of ice and fire',
    'price' => 432.75
);

$book7 = array(
    'author' => 'T. Shevchenko',
    'title' => 'Kobzar',
    'price' => 500.20
);

$books = array($book1, $book2, $book3, $book4, $book5, $book6, $book7);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class work 20-09-2016</title>
    <style>
        body{
            padding-left: 5px;
        }
        .book {
            float: left;
            position: relative;
            border: 2px solid #000;
            margin: 0 15px 15px 0;
            padding: 5px;
            width: 150px;
            height: 120px;
        }
        .book p{
            text-align: center;
        }
        .table {
            clear: both;
        }
        table td {
            width: 20px;
        }
        .price {
            position: absolute;
            bottom: 5px;
            right: 5px;
        }
        footer {
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>
<body>
	<a href="../">На Головну сторінку</a>
	
    <h2>Books</h2>

    <?php foreach ($books as $book) : ?>
        <div class="book">
            Title: <b><?=$book['title']?> </b>
            <hr>
            <p>Author: <?=$book['author']?> </p>
            <i class="price">Price: <?=number_format($book['price'],2)?></i> 
        </div>
    <?php endforeach; ?>

    <div class="table">
        <h2>Таблиця множення</h2>
        <?php
        $numbers = 10;
        echo "<table border=1>";
        for($i = 1; $i < $numbers; $i++){
            echo "<tr>";
            for ($j = 1; $j < $numbers; $j++) { 
                $product = $i * $j;
				$bg_color = $product % 2 ? '#0ff' : '#ffb90f';
                echo "<td align = center style='background-color: {$bg_color}'> $product </td>";     
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>
    </div>
    <footer>
    Copyright &copy; 2016 Igor Pelekhatyy
    </footer>

</body>
</html>