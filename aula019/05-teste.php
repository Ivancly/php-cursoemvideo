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
           $a=10;
           $b=2;
           $j=$a/2;
           for ($i=0;$i<$j;$i++){
               if ($i % $b == 1) 
               echo "$i";
           }
            
        ?>
        </pre>      
    </div>
</body>
</html>