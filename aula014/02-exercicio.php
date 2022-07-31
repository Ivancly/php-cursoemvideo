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
            function soma($a, $b){
                return $a + $b;
            }

            $x = 3;
            $y = 4;
            $r = soma($x, $y);
            echo "A soma entre $x e $y é $r";
        ?>
    </div>
</body>
</html>