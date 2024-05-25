<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php //array armazena varios elementos na mesma variavel que sao representados por indice
    $instrumentos = array("Acordeão", "Violão", "Bateria");
    $elementos = count($instrumentos)?>
    <p><?php 
    // echo "Eu tenho um ".$instrumentos[0]."!"; ?></p>
    <p><?php 
    // echo "Eu tenho um ".$instrumentos[1]."!"; ?></p>
    <p><?php 
    // echo "Eu tenho um ".$instrumentos[2]."!";?> </p>
    <p><?php 
    echo count($instrumentos) ?></p>
    <?php  for($x = 0; $x<$elementos; $x++){
        echo $instrumentos[$x];
        echo "<br>";
        //percorre toda a array
    } ?> 
    

</body>
</html>