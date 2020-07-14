<?php
$db_host='localhost';
$db_name='test';
// 資料庫名稱
$db_user='root';
$db_pass='';

$dsn =sprintf('mysql:host=%s;dbname=%s;charset=utf8',$db_host,$db_name);

$pdo_options = [
    PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"
];

$pdo =new PDO($dsn,$db_user,$db_pass,$pdo_options);
