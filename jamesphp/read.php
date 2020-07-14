<?php
require __DIR__ .'/connect.php';
$sql ="SELECT*FROM address_book";
$stmt =$pdo->query($sql);
$row=$stmt->fetch(PDO::FETCH_ASSOC);

print_r($row);