<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //fazer um algoritmo que indica se o valor é positivo ou negativo de um numero digitado pelo usuario...
    $valor = $_POST['valor'];
    if ($valor>0){
        echo "O número digitado $valor, é positivo";
    } else if ($valor==0){
        echo "O valor inserido é 0, ou seja, não existem sinais para ele";
    } else {
        echo "O valor $valor, é negativo";
    }
    ?>
</body>
</html>