<?php
require __DIR__ .'/connect.php';
$sql ="SELECT*FROM address_book";
$stmt =$pdo->query($sql);
echo json_encode($stmt->fetchAll(), JSON_UNESCAPED_UNICODE);