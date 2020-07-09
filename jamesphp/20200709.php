<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <?php
    $a = "xyz\nabc\"def\'ghi\\";
    $b = 'xyz\nabc\"def\'ghi\\';
    echo "$a </br>";
    echo $b;

    echo $_GET['a'] + $_GET['b'];
    
    ?> -->
    <!-- <?php    echo $_GET['a'] ; ?> -->
    <?= isset($_GET['name']) ? $_GET['name'] : 'Nobody' ?>
<br>
<?= isset($_GET['age']) ? $_GET['age'] : '' ?>

</body>
</html>