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
            // http://localhost/php-cursoemvideo/aula007/02-igualIdentico.php
            $a = 3;
            $b = "3";
            $r = ($a == $b) ? "SIM" : "NÃO";
            echo "As variaveis 'A' e 'B' são iguais? $r";

            $a = 3;
            $b = "3";
            $r = ($a === $b) ? "SIM" : "NÂO";
            echo "<br>As variaveis 'A' e 'B' são identicas? $r";
        ?>
    </div>
</body>
</html>