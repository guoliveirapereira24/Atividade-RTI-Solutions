<?php
    
    if (
        isset($_POST["origem"]) && isset($_POST["destino"])
        && isset($_POST["kms"]) && isset($_POST["pedagios"])
    ) {
    
        $origem = $_POST["origem"];
        $destino = $_POST["destino"];
        $kms = $_POST["kms"];
        $pedagios = $_POST["pedagios"];

        $valorFinal = $kms * 6.00 + $pedagios * 9.50;  
    

    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
        <link href="style.css" rel="stylesheet" />
    </head>
    
    <body class="<?= $class ?>">
    <div id="texto-resultado">
        <h1 id="texto-resultado">A viagem de <?= $origem ?> até <?= $destino ?>, possui o valor de: <?= number_format($valorFinal, 2) ?></h1>
    </div>
    </body>
    
    </html>
