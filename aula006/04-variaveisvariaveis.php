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
            $x = "abc";
            $$x = "def";
            echo "O conteudo da variável x é '$x'";
            echo "<br>A variável criada recebeu o valor '$abc'";
        ?>
    </div>
</body>
</html>