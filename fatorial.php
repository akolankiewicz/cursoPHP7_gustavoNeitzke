<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
<input type="number" value="Digite o número para ver seu fatorial" name="numero">
<input type="submit" value="Exibir">
<?php 
$numero = $_GET['numero'] ?? 0;
if ($numero == 1){
    $result = 1;
}
for($i = ($numero - 1) ;$i>0 ;$i--){
    $numero = $numero*$i;
}
echo "<p>$numero</p>"
?> 




</form>
</body>
</html>