<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
    // $ar = array(3,3,3,3);
    // $ar1 = [4,4,4,4];
    // print_r($ar);

    // var_dump($ar1);

    // $p = array(
    //     'a'=>'A',
    //     'b'=>'B',
    //     'c'=>'c',
    //     666
    // );
    // print_r($p)

    $p = [
        'name' => '彼得',
        'age' => 27,
        'gender' => 'male',
    ];
    $a=$p;
    $b=&$p;
    $p['age'] = 66;
    print_r($p);
    print_r($a);
    print_r($b);





    ?>
    </pre>


</body>
</html>