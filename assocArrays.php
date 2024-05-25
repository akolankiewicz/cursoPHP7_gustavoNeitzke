<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $idade = array('Arthur'=>'18', 'Agatha'=>'11', "Anthonela"=>'6');
    ?>
    <?php 
    // echo "Arthur tem ".$idade['Arthur']." anos.";
    ?>
    <?php 
    foreach($idade as $name => $name_value){
     echo "Nome= ".$name.", Idade=". $name_value;
     echo "<br>";   
    }?>
</body>
</html>