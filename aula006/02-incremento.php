<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            // http://localhost/php-cursoemvideo/aula006/02-incremento.php?aa=2022

            $anoAtual = $_GET["aa"];
            echo "O ano atual é $anoAtual e o ano anterior é: " . --$anoAtual;
        ?>
    </div>
</body>
</html>