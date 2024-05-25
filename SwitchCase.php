<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $nome = 'fulano'; 
    switch($nome){ // switch analisa as condições e funciona a partir da validação
        case "de tal":
            echo "Você é o de tal";
            break;
        case "fulano":
            echo "Você é o Fulano";     
            break;
        default:
            echo "não se encaixa em nenhum caso";
    }   
    ?>
</body>
</html>