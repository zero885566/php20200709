<? 
// $a = isset($_GET['a']) ? intval($_GET['a']) : 0;
// $b = isset($_GET['b']) ? intval($_GET['b']) : 0;
// echo $a + $b;
 ?>

<?php
$a = isset($_GET['a']) ? intval($_GET['a']) : 0;
$b = isset($_GET['b']) ? intval($_GET['b']) : 0;
echo "<h2>". ($a + $b). "</h2>";