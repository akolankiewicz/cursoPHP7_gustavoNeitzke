<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="get">
    <input type="text" name="valor">
    <input type="submit">
    <?php 
        $i = 0;
        $valor = $_GET['valor'] ?? 0 ; 
        while($i<11){
            $result = $valor*$i;
            echo "<p>$valor x $i = $result </p>";
            $i++;
        }
    ?>
</form>
</body>
</html>