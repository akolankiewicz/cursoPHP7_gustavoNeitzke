<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $a = 5;
    $b = 2;
    ?>
    <p><?php echo "Valor de A=$a, Valor de B=$b."?></p>
    <p><?php var_dump($a==$b)?> numero igual ==</p>
    <p><?php var_dump($a!=$b)?> numero diferente !-</p>
    <p><?php var_dump($a===$b)?> numero e tipo igual ===</p>
    <p><?php var_dump($a<>$b)?> se são diferentes <></p>
    <p><?php var_dump($a!==$b)?> retorna verdadeiro se são diferentes e tipo diferente !==</p>
    <p><?php var_dump($a>$b)?> maior ></p>
    <p><?php var_dump($a<$b)?> menor <</p>
    <p><?php var_dump($a>=$b)?> maior igual >=</p>
    <p><?php var_dump($a<=$b)?> menor igual <=</p>
    <p><?php var_dump($a<=>$b)?> maior igual ou menor igual <=></p>
</body>
</html>