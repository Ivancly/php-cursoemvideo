<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referencia</title>
    <link rel="stylesheet" href="../_css/estilo.css">
    <style>
        span {
            color: rgb(200, 0, 0);
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <div>
        <?php
           $nota01 = isset($_GET["nota01"])?$_GET["nota01"]:0;
           $nota02 = isset($_GET["nota02"])?$_GET["nota02"]:0;
           $nota01 = number_format($nota01, 2, ",", ".");
           $nota02 = number_format($nota02, 2, ",", ".");
           $media = ($nota01 + $nota02) / 2;
           $media = number_format($media, 2, ",", ".");
            echo "Notas <span>$nota01</span> e <span>$nota02</span><br>";
            echo "Média de <span>$media</span><br>";
           if($media < 5) {
                echo "Aluno <span>REPROVADO</span>.";
           } 
           elseif($media >= 5 && $media < 7) {
                echo "Aluno de <span>RECUPARAÇÃO</span>.";
           } else {
                echo "Aluno <span>APROVADO</span>";
           }
        ?>
        <p><a href="03-exercicio.html">Voltar</a></p>
    </div>
</body>
</html>