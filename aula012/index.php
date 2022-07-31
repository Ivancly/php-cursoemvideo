<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../_css/estilo.css">
    <style>

    </style>
</head>
<body>
    <div>
        <fieldset><legend>Tabuada</legend>
            <form action="http://localhost/php-cursoemvideo/aula012/03-tabuada.php" method="get">
                <select name="tabuada" id="itabuada">
                    
                    <?php
                    $contador = 1;
                    while($contador <= 10){
                        echo "<option value='$contador'>$contador</option>";
                        $contador++;
                    }
                    ?>

                </select>
                <input type="submit" value="Calcular">
        </fieldset>
        

            
        
        </form>
    </div>
</body>
</html>