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
            $tabuada = $_GET["tabuada"];
            $contador = 1;
            while($contador <= 10){
                $resultado = $contador*$tabuada;
                echo "$contador x $tabuada = $resultado<br>";
                $contador++;

            }
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </div>
</body>
</html>