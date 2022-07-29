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
            $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[NOME NÃO INFORMADO]";
            $nascimento = isset($_GET["nascimento"]) ? $_GET["nascimento"] : "[NACIMENTO NÃO INFORMADO]";
            $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[SEM SEXO]";
            $idade = isset($_GET["nascimento"]) ? (20 . date("y") - $nascimento) : "[NACIMENTO NÃO INFORMADO]";
            echo "$nome é $sexo e tem $idade anos";
        ?>
        <p><a href="02-exercicios.html">Voltar</a></p>
    </div>
</body>
</html>