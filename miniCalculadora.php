<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    valor 1<input type="number" name="v1"><br>
    valor 2<input type="number" name="v2"><br>
    escolha a operação <select name="select" id="x">
        <option value="1" name="">Adição</option>
        <option value="2" name="">Subtração</option>
        <option value="3" name="">Multiplicação</option>
        <option value="4" name="">Divisão</option>
    </select>
    <input type="submit">
    </form>
    <?php 
    $result = 0;
    $v1 = $_GET['v1'] ?? 0;
    $v2 = $_GET['v2'] ?? 0;
    $select = $_GET['select'] ?? 0;
    if($select==1){
        $result = $v1 + $v2;
    }
    if($select==2){
        $result = $v1 - $v2;
    }
    if($select==3){
        $result = $v1 * $v2;
    }
    if($select==4){
        $result = $v1 / $v2;
    }
    echo "$result"
    ?>
</body>
</html>