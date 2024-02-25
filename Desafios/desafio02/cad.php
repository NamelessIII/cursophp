<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Resultado do sorteio</h1>
</header>
<main>
    <?php 
       $inicial= $_GET["inicial"] ?? "inválido";
       $final= $_GET["final"] ?? "inválido";
       $result= rand($inicial, $final); 
       //também é possivel usar o random_int() pra criptografaria de sorteador (inicial deve ser menor que o final)

       echo "<p>O número sorteado foi $result</p>"

    ?>

    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
</main>
</body>
</html>
