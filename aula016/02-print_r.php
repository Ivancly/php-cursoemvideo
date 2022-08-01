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
            /*
                %d - valor decimal (positivo ou negativo)
                %u - valor decimal sem sinal (aprenas positivos)
                %f - valor real
                %s - string
            */

            $x[0] = 4;
            $x[1] = 3;
            $x[2] = 8;
            print_r($x);

            $v = array(3,7,6,2,1,9);
            echo "<br><br>";
            print_r($v);

            echo "<br><br>";
            var_dump($v);

            echo "<br><br>";
            var_export($v);
        ?>
    </div>
</body>
</html>