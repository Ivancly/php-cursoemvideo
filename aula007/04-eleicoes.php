<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referencia</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            // http://localhost/php-cursoemvideo/aula007/04-eleicoes.php?an=1989
            $ano = $_GET["an"];
            $idade = 2022 - $ano;
            echo "Quem nasceu em $ano tem idade de $idade anos";
            $tipo = ($idade < 18 || $idade > 64) ? "NÃO OBRIGATÓRIO" : "OBRIGATÓRIO";
            echo "<br>E dessa forma seu voto é $tipo";
        ?>
    </div>
</body>
</html>