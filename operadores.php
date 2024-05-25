<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $a = 10;
    $b = 5;
    $soma = $a + $b; 
    $subtracao = $a - $b;
    $multiplicacao = $a*$b;
    $divisao = $a / $b;
    $resto = $a%$b;
    $exponenciacao = $a**$b;
    ?>
    <p><?php echo "Soma: $soma"?></p>
    <p><?php echo "Subtração: $subtracao"?></p>
    <p><?php echo "Multiplicação: $multiplicacao"?></p>
    <p><?php echo "Divisão: $divisao"?></p>
    <p><?php echo "Resto: $resto"?></p>
    <p><?php echo "Exponenciação: $exponenciacao"?></p>
</body>
</html>