<?php

require_once 'connection.php';
$stmt = $pdo->query('SELECT * FROM books');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="add.php?id=<?=$bookId?>">ADD AUTHOR</a>
    </header>
    <ul>
        <?php while ($book = $stmt->fetch() ): ?>
            <li><a href="book.php?id=<?=$book['id'];?>"><?=$book['title'];?></a></li>
        <?php endwhile; ?>
    </ul>
</body>
</html>
