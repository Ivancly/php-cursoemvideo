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
            $texto = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi magni tempore esse minus et numquam aut eius exercitationem! Molestiae, eaque mollitia expedita ab incidunt suscipit labore iste quis dolore ut! Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque eveniet, officiis natus veritatis assumenda necessitatibus ut reprehenderit, et quae praesentium deleniti, fugiat magnam cumque doloribus quaerat! Maxime non natus sunt?";

            $resultado = wordwrap($texto, 100, "<br>\n", false);
            echo "$resultado<br><br>";

            echo strlen($texto);
            echo "<br><br>";

            $nome = "   Ivancly Batista da Silva   ";
            echo strlen($nome);
            echo "<br>";

            $novoNome = trim($nome);
            echo strlen($novoNome);
            echo "<br>";

            $novoNome = ltrim($nome);
            echo strlen($novoNome);
            echo "<br>";

            $novoNome = rtrim($nome);
            echo strlen($novoNome);
            echo "<br><br>";

            $frase = "Eu vou estudar PHP";
            $contarFrases = str_word_count($frase, 0);
            print($contarFrases);
            echo "<br>";
            $contarFrases = str_word_count($frase, 1);
            print_r($contarFrases);
            echo "<br>";
            $contarFrases = str_word_count($frase, 2);
            print_r($contarFrases);
            echo "<br><br>";

            $site = "Curso em Video";
            $vetor = explode(" ", $site);
            print_r($vetor);
            echo "<br>";
            $vetor = str_split($site);
            print_r($vetor);
            echo "<br><br>";

            $vetro[0] = "Curso";
            $vetro[1] = "em";
            $vetro[2] = "Video";
            $texto = implode("", $vetor);
            print($texto);
            echo "<br><br>";

            $letra = chr(67);
            echo "A letra de codigo 67 é $letra";
            echo "<br><br>";

            $letra = "C";
            echo "o codigo da letra C é ". ord($letra);





        ?>
    </div>
</body>
</html>