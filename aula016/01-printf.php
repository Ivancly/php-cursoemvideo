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
            $produto = "Leite";
            $preco = 4.5;
            echo "O $produto custa R$ " . number_format($preco, 2, ",", ".");
            printf("<br>O %s custa R$ %.2f<br><br>", $produto, $preco);

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
        ?>
    </div>
</body>
</html>