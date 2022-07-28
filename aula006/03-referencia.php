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
            $a = 3;
            $b = $a;
            $b += 5;
            echo "A variável 'a' vale $a";
            echo "<br>A variável 'b' vale $b";

            $a = 3;
            $b = &$a; //criou uma referência
            $b += 5;
            echo "<br><br>A variável 'a' vale $a";
            echo "<br>A variável 'b' vale $b";
        ?>
    </div>
</body>
</html>