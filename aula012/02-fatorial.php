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
            $valor = $_GET["valor"];
            
            
            $resultado = 1;
            $contador = 1;
            echo "$valor! = $contador";
            do{
                $resultado *= $contador;
                $contador++;
                if($valor >= $contador){
                    echo " x $contador";
                }
            }while($valor >= $contador);
            echo "<br>$valor! = " . number_format($resultado,"0",",",".")
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </div>
</body>
</html>