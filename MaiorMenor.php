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
<p>Digite dois valores e veja o maior e o menor</p>
Valor 1<input type="number" name="v1"><br>
Valor 2<input type="number" name="v2"><br>
<input type="submit"> </form>
<?php
    $v1 = $_GET['v1'] ?? 0;
    $v2 = $_GET['v2'] ?? 0;
    if($v1>$v2){
        echo "$v1 é maior que $v2";
    } else if ($v2>$v1){
        echo "$v2 é maior que $v1";
    } else {
        echo "Alto lá! os numeros são iguais";
    }
    ?>
</form>
</body>
</html>