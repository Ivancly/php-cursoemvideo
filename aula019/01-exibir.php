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
        <pre>
        <?php
            $v = array("A","J","M","X","K");
            print_r($v);
            echo "Meu vetor tem " . count($v) . " elementos.";
            echo "<br><br>";

            var_dump($v);
            echo "<br><br>";
            
        ?>
        </pre>      
    </div>
</body>
</html>