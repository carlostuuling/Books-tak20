<?php
require_once 'connection.php';
$stmt = $pdo->query('SELECT * FROM books');
while ($row = $stmt->fetch())
{
    echo "<a href='book.php?id=" . $row['id'] .  "'>" . $row['title'] . "</a>" . "<br>";
}
