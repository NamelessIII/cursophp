<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    desafio03 copy<link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Cotação</h1>
</header>
<main>
    <?php 
       $reais= $_GET["reais"] ?? "inválido";
       $result= round(($reais/5.02),2); 

       echo "<p>O valor R$$reais equivale a U$$$result</p>"

    ?>

    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
</main>
</body>
</html>
