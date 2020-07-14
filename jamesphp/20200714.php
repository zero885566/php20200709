<?php
session_start();

$users =[
    'vivi'=>[
        'nickname'=>'vi',
        'pw'=>'123'
    ],
    'lili'=>[
        'nickname'=>'li',
        'pw'=>'133'
    ],
];

if(isset($_POST['account']) and isset($_POST['password'])){
    if(!empty($users[$_POST['account']])){
        if($users[$_POST['account']]['pw']==$_POST['password']){
            $_SESSION['user'] =[
                'account'=>$_POST['account'],
                'nickname'=>$user[$_POST['account']]['nickname']
            ];
        }
    }
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre>
    GET:
    <?php print_r($_GET) ?>

    POST:
    <?php print_r($_POST) ?>

    REQUEST:
    <?php print_r($_REQUEST) ?>
</pre>
<div>
<?php if(isset($_SESSION['user'])): ?>
        <?= $_SESSION['user']['nickname'] ?> hi<br>
        <a href="2020071401.php">登出</a>
    <?php else: ?>
<form action="" method="post">
    
    <label for="account">帳號</label>
    <input type="text" id="account" name="account"><br>
    <label for="password">密碼</label>
    <input type="password" id="password" name="password"><br>
    <input type="checkbox" id="my_cb" name="my_cb" value="好">
<!--    <input type="submit" value="登入">-->
    <button type="submit">登入</button>
    <br>
</form>
<?php endif; ?>
</div>



</body>
</html>