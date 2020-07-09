<?php
$cat = isset($_GET['cat']) ? intval($_GET['cat']) : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="?cat=1">cat 1</a>
<br>
<a href="?cat=2">cat 2</a>

<?php if ($cat == 1) { ?>
    <h2>Cat 1</h2>
    <img src="./image/dead but delicious.gif" alt="">
<?php } ?>
<?php if ($cat == 2): ?>
    <h2>Cat 2</h2>
    <img src="./image/You fight with each other every now and then_.gif" alt="">
<?php endif ?>
</body>
</html>