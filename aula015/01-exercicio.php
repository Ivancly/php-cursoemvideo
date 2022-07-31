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
            function teste($x){
                $x += 2;
                echo "O valor de x é $x<br>";
            }

            $a = 3;
            teste($a);
            echo "O valor de a é $a<br><br>";

            function teste02(&$x){
                $x += 2;
                echo "O valor de x é $x<br>";
            }

            $a = 3;
            teste02($a);
            echo "O valor de a é $a<br>";
        ?>
    </div>
</body>
</html>