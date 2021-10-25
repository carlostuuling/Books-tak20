<?php

require_once 'connection.php';

$bookId = $_GET['id'];
if ( isset($_POST['save']) ) {
    $stmt = $pdo->prepare('UPDATE books SET title=:title WHERE id=:id');
    $stmt->execute([':id' => $bookId, ':title' => $_POST['title']]);

    header('Location: book.php?id=' . $bookId);
}
$stmt = $pdo->prepare ('SELECT * FROM books b LEFT JOIN book_authors ba ON b.id=ba.book_id LEFT JOIN authors a ON a.id=ba.author_id WHERE b.id=:id');

$stmt->execute([':id' => $bookId]);
$book = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$book['title']; ?></title>
</head>
<body>
    <form action="edit.php?id=<?= $bookId; ?>" method="post">
        <input type="text" name="title" value= "<?=$book['title']; ?>">
        <input type="submit" name="save" value="salvesta">
    </form>
</body>
