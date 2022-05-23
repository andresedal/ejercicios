<?php

print_r($_POST);

$texto='';
$veces='';

if(isset($_POST['enviado'])){

    if(isset($_POST['texto'])){
        $texto = ($_POST['texto']);
    }

    if(isset($_POST['veces'])){
        $veces = ($_POST['veces']);
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cansino</title>
</head>
<body>
    <h1 align="center">Hola cansino</h1>
    <form action="" method="post">
        Texto: <input type="text" name="texto" value="<?=$texto?>">
</br>
</br>
        Numero: <input type="number" name="veces" value="<?=$veces?>">
</br>
</br>
        <input type="submit" name="enviado" value="enviar" >
    </form>

    <?php 
        for($i=0;$i<=$veces;$i++){ ?>
            <h1><?=$texto?></h1>        
    <?php }?>
</body>
</html>