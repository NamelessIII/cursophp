<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet"href="style.css">
</head>
<body>
    <?php 
    //Capturando os dados do Formulário Retroalimentado
    $valor1 = $_GET['v1'] ?? 0;
    $peso1 = $_GET['p1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;
    $peso2 = $_GET['p2'] ?? 0;
    ?>
    <main>
        <h1>Verificador de Média</h1>
       <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Peso 1</label>    
            <input type="number" name="p1" id="p1" value="<?=$peso1?>">
            <label for="v1">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <label for="v2">Peso 2</label>    
            <input type="number" name="p2" id="p2" value="<?=$peso2?>">
            <input type="submit" value="Verificar">
    </form>
    </main>

    <section id="resultado">
        <h2>Resultado da Média simples</h2>
        <?php 
            $medias = ($valor1 + $valor2) / 2;
            print "<p>A média entre os valores $valor1 e $valor2 é igual a $medias.</p>";
        ?>
        <h3>Resultado da média ponderada</h3>
        <?php 
            
            $mediap = ((($valor1 * $peso1)+($valor2*$peso2)) / ($peso1+$peso2));
            //media ponderada é o v1 * p1 + v2 * p2 / p1 + p2 
            print "<p>A média ponderada entre os valores $valor1 e $valor2 é igual a $mediap.</p>";
        ?>
    </section>
</body>
</html>