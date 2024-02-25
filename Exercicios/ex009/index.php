<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz quadrada e cúbica</title>
    <link rel="stylesheet"href="style.css">
</head>
<body>
    <?php 
    //Capturando os dados do Formulário Retroalimentado
    $valor1 = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
        <h1>Somador de Valores</h1>
       <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Valor 2</label>    
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
    </form>
    </main>

    <section id="resultado">
        <h2>Resultado da Divisão</h2>
        <?php 
            $resto = $valor1 % $valor2;
            print "<p>O resto da divisão entre os valores $valor1 e $valor2 é igual a $resto.</p>";
        ?>
        <h3>Resultado da Divisão</h3>
        <?php 
            $divint = (intdiv($valor1, $valor2));
            print "<p>A divisão entre os valores $valor1 e $valor2 é igual a $divint.</p>";
        ?>
    </section>
</body>
</html>