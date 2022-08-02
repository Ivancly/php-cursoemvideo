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
           $frase = "Estou aprendendo PHP";
           $pos = strpos($frase, 'PHP');
           echo "$frase <br> A string foi encontrada na posição $pos";
           echo "<br><br>";

           $pos = stripos($frase, 'php');
           echo "$frase <br> A string foi encontrada na posição $pos";
           echo "<br><br>";

           $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
           $cont = substr_count($frase, "PHP");
           echo "'PHP' encontrado $cont vezes";
           echo "<br><br>";

           $site = "Curso em Video";
           $sub = substr($site, 0, 5);
           echo "$sub";
           echo "<br><br>";

           $nome = "Ivancly";
           $novo = str_repeat($nome, 5);
           print("O texto gerado foi $novo");
           echo "<br><br>";

           $frase = "Gosto de estudar Matemática!!!";
           $novaFrase = str_replace("Matemática", "PHP", $frase);
           echo "$novaFrase";

           phpinfo();

        ?>
    </div>
</body>
</html>