<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
    <p>Digite dois números e eles voltarão em ordem crescente</p>
    <input type="number" name="v1"><br>
    <input type="number" name="v2"><br>
    <input type="submit"></form>
    <?php
    $v1 = $_GET['v1'] ?? 0;
    $v2 = $_GET['v2'] ?? 0;
    if($v1>$v2){
        echo $v2, $v1;
    } else if ($v2>$v1){
        echo $v1, $v2;
    } else {
        echo "Alto lá! os numeros são iguais";
    }
    ?>
</body>
</html>