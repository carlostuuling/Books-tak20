<?php
require_once 'connection.php';
$stmt = $pdo ->prepare ('SELECT * FROM authors WHERE first_name=:first_name');

$stmt-> execute([':first_name' => $_GET['name']]);
$author = $stmt->fetch();
var_dump($author);
echo "<br><br>";
echo $author['last_name'];
echo $_GET["id"];
