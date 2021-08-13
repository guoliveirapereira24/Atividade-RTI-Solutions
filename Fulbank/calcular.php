<?php
    if(isset($_POST["nome"]) && isset($_POST["salarioAtual"])
        && isset($_POST["genero"]) && isset($_POST["cargo"])){
            $nome = $_POST["nome"];
            $salarioAtual = $_POST["salarioAtual"];
            $genero = $_POST["genero"];
            $cargo = $_POST["cargo"];
            
            $salarioNovo = 0;

        //    if($salario > 5000){
          //      $salarioNovo = $salario * 1.1;
           // }else{
             //   $salarioNovo = $salario * 1.2;
           // }
            $salarioNovo = $salarioAtual > 5000 ? $salarioAtual * 1.1 : $salarioAtual * 1.2; 


        }

        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Salário</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <main>
        <p>  <?= $genero === "m" ? "O" : ($genero === "f" ? "A" : "") ?> <?= $nome?>
         passará a receber <?= number_format($salarioNovo, 2, ",", ".") ?>,
        no cargo de <?= $cargo ?></p>

    </main>
    
</body>
</html>