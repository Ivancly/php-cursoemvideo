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
            sort($v);
            print_r($v);
            rsort($v);
            print_r($v);
            asort($v);
            print_r($v);
            arsort($v);
            print_r($v);
            echo "<br><br>";

            $v = array(2=>"A",5=>"J",0=>"M",3=>"X",4=>"K");
            print_r($v);
            ksort($v);
            print_r($v);
            krsort($v);
            print_r($v);
            
        ?>
        </pre>      
    </div>
</body>
</html>