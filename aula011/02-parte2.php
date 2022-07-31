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
            $contador = 1;
            while($contador <= 5){
                $variavel = "numero".$contador;
                $$variavel = $_GET["numero$contador"];
                //$numero = $_GET["numero$contador"];
                //echo "$numero<br>";
                $contador++;
            }
            echo "$numero1 - $numero2 - $numero3 - $numero4 - $numero5<br>";

            $contador = 5;
            while($contador > 0){
                $v = ${"numero".$contador};
                echo "$v<br>";
                $contador--;
            }
        ?>
    </div>
</body>
</html>