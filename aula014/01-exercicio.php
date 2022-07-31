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
                $s = $a + $b;
                echo "A soma vale $s<br>";
            }

            soma(3, 4);
            soma(6, 10);
            $x = 5;
            soma(7, $x);
        ?>
    </div>
</body>
</html>