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
           $ano = isset($_GET["ano"])?$_GET["ano"]:"1900";
           $idade = date("Y") - $ano;
           echo "Você nasceu em $ano";
           echo "<br>Você tem $idade anos";

           if($idade < 16){
                $tipoVoto = "não vota";
           } elseif(($idade >= 16 && $idade < 18) || ($idade >= 65)) {
                    $tipoVoto = "voto opcioanal";
                } else {
                    $tipoVoto = "voto obrigatório";
                }
           echo "<br>Para essa idade $tipoVoto."
        ?>
        <p><a href="02-exercicio.html">Voltar</a></p>
    </div>
</body>
</html>