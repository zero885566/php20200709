<?php
require __DIR__ .'/connect.php';
$sql ="SELECT*FROM address_book";
$stmt =$pdo->query($sql);
while( $row = $stmt->fetch()){

    echo json_encode($row, JSON_UNESCAPED_UNICODE). "\n";

}