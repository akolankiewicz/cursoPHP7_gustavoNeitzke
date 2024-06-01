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
<h1>Verificador de Maioridade</h1>
Nome: <input type="text" name="nome"><br>
Idade: <input type="number" name="idade"><br>
<input type="submit">
<?php 
$nome = $_GET['nome'] ?? 'Nome';
$idade = $_GET['idade'] ?? 'x';
if($idade>=18){
    echo "<p>$nome é maior de idade e tem $idade anos.</p>";
} else {
    echo "<p>$nome é menor de idade e tem $idade anos.</p>";
}
?>

</form>
</body>
</html>