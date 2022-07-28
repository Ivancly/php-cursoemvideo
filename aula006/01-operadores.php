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
            // http://localhost/php-cursoemvideo/aula006/01-operadores.php?p=9.90

            $preco = $_GET["p"];
            echo "O preço do produto é R$". number_format($preco, 2);
            $preco += $preco*0.1;
            echo "<br>Mais 10% de aumento é R$". number_format($preco, 2);

            $preco = $_GET["p"];
            $preco -= $preco*0.1;
            echo "<br>Desconto de 10% é R$". number_format($preco, 2);
        ?>
    </div>
</body>
</html>