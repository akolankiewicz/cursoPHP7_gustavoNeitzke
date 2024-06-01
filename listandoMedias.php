<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body
        {
            text-align: center;
        }
    </style>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
<input type="number" name="v1">
<input type="number" name="v2">
<input type="number" name="v3">
<input type="submit">
<?php 
$situacao = '';
$v1 = $_GET['v1'] ?? 0;
$v2 = $_GET['v2'] ?? 0;
$v3 = $_GET['v3'] ?? 0;
$notas = array($v1, $v2, $v3); // exercicio pediu, é mais facil fazer sem array
$media = ($v1[0] +$v2[1] +$v3[2]) / 3;
echo "<p> Nota 1: $v1 </p>";
echo "<p> Nota 2: $v2 </p>";
echo "<p> Nota 3: $v3 </p>";
if($media >= 6){
    echo "Com essas notas, o aluno está aprovado, e sua média final foi $media";
} 
if($media<6){
    echo "Com essas notas, o aluno está reprovado, e sua média final foi " . number_format($media, 2);
}

?>
</form>
</body>
</html>