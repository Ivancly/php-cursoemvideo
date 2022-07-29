<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php
        $texto = isset($_GET["text"])?$_GET["text"]:"[Texto não informado]";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12px";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referencia</title>
    <link rel="stylesheet" href="../_css/estilo.css">
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <div>
        <?php
            echo "<span class='texto'>$texto</span>"
        ?>
        <p><a href="03-exercicio.html">Voltar</a></p>
    </div>
</body>
</html>