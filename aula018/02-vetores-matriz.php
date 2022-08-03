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
            $c = range(5,20,5);
            print_r($c);
            echo "<br><br>";

            foreach($c as $v){
                echo "$v - ";
            }
            echo "<br><br>";

            $vetor = array(
                0 => 5,
                1 => 9,
                2 => 8,
                3 => 7);
            print_r($vetor);
            echo "<br><br>";

            unset($vetor[2]);
            print_r($vetor);
            echo "<br><br>";

            $vetor = array(
                "nome" => "Ana",
                "idade" => 23,
                "peso" => 65.5);
            print_r($vetor);
            echo "<br>";
            $vetor["fuma"] = true;
            print_r($vetor);
            echo "<br><br>";

            foreach($vetor as $k => $d){
                echo "O campo $k possui o conteudo $d<br>";
            }
            
        ?>
    </div>
</body>
</html>