<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre>
    <?php print_r($_GET)?>
    <?php print_r($_POST)?>
    <?php print_r($_REQUEST)?>
</pre>


<form action="" method="post">
    <button type="button">說你好</button>
    <br>
    <label for="account">帳號</label>
    <input type="text" id="account" name="account"><br>
    <label for="password">密碼</label>
    <input type="password" id="password" name="password"><br>
    <input type="checkbox" id="my_cb" name="my_cb" value="好">
    <label for="my_cb">同意....</label>
    <br>
<!--    <input type="submit" value="登入">-->
    <button type="submit">登入</button>
    <br>
</form>






    <!-- <?php
    // $p = [
    //     'name' => '彼得',
    //     'age' => 27,
    //     'gender' => 'male',
    //     123
    // ];
    // foreach($p as $k => $v){

    //     echo"$k =&gt; $v <br>";
    // };
    
    
    ?> -->
</body>
</html>