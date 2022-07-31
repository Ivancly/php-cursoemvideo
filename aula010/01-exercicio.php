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
            $numero = isset($_GET["numero"])?$_GET["numero"]:0;
            $tipoOperacao = isset($_GET["operacao"])?$_GET["operacao"]:0;

            switch($tipoOperacao) {
                case 0:
                    $resposta = $numero*2;
                    break;
                case 1:
                    $resposta = pow($numero,3);
                    break;
                case 2:
                    $resposta = sqrt($numero);
                    break;
            }
            echo "O resultado da operação solicitada foi $resposta"
        ?>
        <p><a href="01-exercicio.html">Voltar</a></p>
    </div>
</body>
</html>