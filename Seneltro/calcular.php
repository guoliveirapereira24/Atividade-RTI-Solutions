<?php

if (
    isset($_POST["nome"]) && isset($_POST["rua"])
    && isset($_POST["numero"]) && isset($_POST["kwh"])
) {

    $nome = $_POST["nome"];
    $rua = $_POST["rua"];
    $numero = $_POST["numero"];
    $kwh = $_POST["kwh"];

    

   /*  $media = ($rua + $numero + $kwh) / 3;**/

    if ($kwh >= 120) {
        $class  = "economize";
        $texto = "Tente economizar mais";
        $valor = $kwh * 0.42;
    } elseif ($kwh < 120) {
        $class = "parabens";
        $texto = "Obrigado por economizar!";
        $valor = $kwh * 0.32;
    } else {

    echo "<h1>Você não enviou as informação corretamente</h1>";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="styles.css" rel="stylesheet" />
</head>

<body class="<?= $class ?>">
    <h1>Caro(a) <?= $nome ?></h1>
    <h1>O valor da sua conta de luz é: <?= number_format($valor, 2) ?></h1>
    <h1><?= $texto ?></h1>
</body>

</html>