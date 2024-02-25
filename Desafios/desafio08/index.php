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
    $salario = 1320;
    $valor1 = $_GET['v1'] ?? 0;
    
    ?>
    <main>
        <h1>Somador de Valores</h1>
       <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Seu salário</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <input type="submit" value="Somar">
    </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>
        <?php 
            if ($valor1 > $salario) {
            $div = intdiv($valor1, $salario);
            $resto = $valor1 % $salario;
            print "<p>O valor do seu salário equivale a $div salários mínimos e mais R$$resto,00.</p>";
            }
           else print "<p>Você recebe menos de um salário mínimo</p>";
            
        ?>
    </section>
</body>
</html>