<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Resultado do processamento</h1>
</header>
<main>
    <?php 
       $num = $_GET["num"] ?? "inválido";
       $numsucessor = ($num + 1);
       $numanterior = ($num - 1);
              echo "<p>O número escolhido foi $num</p>";
              echo "<p>O seu sucessor é $numsucessor</p>";
              echo "<p>O seu antecessor é $numanterior</p>";


    ?>

    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
</main>
</body>
</html>
