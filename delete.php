<?php
require_once "connection.php";

$stmt = $pdo->prepare('DELETE FROM  books WHERE id=:id');
$stmt->execute([':id' => $_GET["id"]]);
header('Location: index.php');
