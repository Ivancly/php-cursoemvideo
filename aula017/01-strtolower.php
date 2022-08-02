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
           $nome = "ivancLy BaTista da silva";
           $nome2 = strtolower($nome);
           echo "Seu nome é $nome2";
           echo "<br><br>";

           $nome2 = strtoupper($nome);
           echo "Seu nome é $nome2";
           echo "<br><br>";

           $nome2 = ucfirst($nome);
           echo "Seu nome é $nome2";
           echo "<br><br>";

           $nome2 = ucwords($nome);
           echo "Seu nome é $nome2";
           echo "<br><br>";

           $nome2 = strrev($nome);
           echo "Seu nome é $nome2";
           echo "<br><br>";

        ?>
    </div>
</body>
</html>