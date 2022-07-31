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
            $semana = isset($_GET["semana"])?$_GET["semana"]:0;
            switch ($semana){
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Levanta e vai estudar!";
                    break;
                case 1:
                case 7:
                    echo "Dia de descansar!";
                    break;
                default:
                    echo "Dia da semana invalido";
            }
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </div>
</body>
</html>