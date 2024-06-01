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
    <p>Par ou Impar?</p>
    <input type="num" name="valor">
    <input type="submit">
    </form>
    <?php 
    $valor = $_GET['valor'] ?? 0;
    if ($valor%2==0){   
        echo "<p>O $valor, é par.</p>";
    } else {
        echo "<p>O $valor, é impar.</p>";
    }
    ?>
</body>
</html>