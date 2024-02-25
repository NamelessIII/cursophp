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
    <h1>Verificação de número real</h1>
</header>
<main>
    <?php 
       $num= $_GET["num"] ?? "inválido";
       $numint= (int)($num);
       $frac = substr(strpbrk($num, '.,'), 1);

       echo "<p>O número digitado é $num</p>";
       echo "<p>A parte inteira do número é $numint</p>";
       echo "<p>A parte frácionária do número é 0,$frac</p>";

    ?>

    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
</main>
</body>
</html>
