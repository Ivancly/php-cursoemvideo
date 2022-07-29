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
            $valor = $_GET["valor"];
            $raizQuadrada = sqrt($valor);
            $raizQuadrada = number_format($raizQuadrada, "2");
            echo "O valor enviado foi $valor";
            echo "<br>E a raiz quadrada é $raizQuadrada";
        ?>
        <p><a href="01-exercicio.html">Voltar</a></p>
    </div>
</body>
</html>