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
        <form action="02-parte2.php" method="get">
            <?php
                $contador = 1;
                while($contador <= 5){
                    echo "Valor $contador: <input type='number' name='numero$contador' id='inumero$contador' max='100' min='0' value='$contador'><br>";    

                    $contador++;
                }
                
            ?>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>