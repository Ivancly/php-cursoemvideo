<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $n1 = 3;
            $n2 = 2;
            $s = $n1 + $n2;
            echo "A soma entre $n1 e $n2 é igual a $s.";
            echo "<br> A soma vale ". ($n1+$n2);
            echo "<br> A subtração vale ". ($n1-$n2);
            echo "<br> A multiplicação vale ". ($n1*$n2);
            echo "<br> A divisão vale ". ($n1/$n2);
            echo "<br> O módulo vale ". ($n1%$n2);

            // valores recebidos pela URL
            // http://localhost/php-cursoemvideo/aula005/operadores.php?a=3&b=2
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            echo "<br>valores recebidos: $n1 e $n2";
        ?>
    </div>
</body>
</html>