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
            function soma(){
                $parametros = func_get_args();
                $tamanhoParametros = func_num_args();

                $resultado = 0;
                for($contador = 0; $contador < $tamanhoParametros; $contador++){
                    $resultado += $parametros[$contador];
                }
                return $resultado;
                
            }

            echo soma(10,10,10,10,10);
            
        ?>
    </div>
</body>
</html>