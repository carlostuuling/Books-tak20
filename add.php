<?php
    require_once "connection.php";

    if ( isset($_POST['save'])) {
        var_dump( $_POST);
   // $stmt = $pdo->prepare('UPDATE books SET title=:title WHERE id=:id');
    }
   // $stmt = $pdo->prepare('INSERT INTO books WHERE id=:id');
   // $stmt->execute([':id' => $_POST["id"]]);
   // header('Location: index.php');
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
<form action="add.php" method="post">
        <input type="text" name="first-name">
        <input type="text" name="last-name">
        <input type="submit" name="save" value="salvesta">
    </form>
</body>
</html>
