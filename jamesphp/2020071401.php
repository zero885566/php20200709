<?php
// session_start();

// unset($_SESSION['user']);


// header('Location:20200714.php');
session_start();

// 清除某個 session 變數
unset($_SESSION['user']);

// session_destroy(); // 清除所有的 session

header('Location: 20200714.php');

