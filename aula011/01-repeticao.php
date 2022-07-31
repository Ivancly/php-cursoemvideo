<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referencia</title>
    <link rel="stylesheet" href="../_css/estilo.css">
    <style>
    </style>
</head>
<body>
    <div>
        <?php
            $contador = 0;
            while($contador <= 10){
                echo "$contador<br>";
                $contador++;
            }
            echo "<br>";
            $contador = 10;
            while($contador >= 0){
                echo "$contador<br>";
                $contador--;
            }
        ?>
    </div>
</body>
</html>