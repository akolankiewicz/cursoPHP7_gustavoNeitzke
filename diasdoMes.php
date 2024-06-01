<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>    
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
<h1>Número do Mês</h1>
<input type="number" name="numero">
<input type="submit">
<?php 
$numero = $_GET['numero'] ?? 0;
$meses = Array("Digite o número","Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
echo "<p>".$meses[$numero]."</p>";

?>
</form>
</body>
</html>